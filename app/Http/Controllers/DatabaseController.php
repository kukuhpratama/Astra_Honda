<?php

namespace App\Http\Controllers;
use App\Imports\DatabaseH1Import;
use App\Exports\DatabaseH1Export;
use App\Imports\DatabaseH2Import;
use App\Exports\DatabaseH2Export;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\DatabaseH1;
use App\DatabaseH2;
use App\Dealer;
use DB;

class DatabaseController extends Controller
{   

    public function index()
    {
        return view('main_dealer.home');
    }

    public function filterH1(Request $request){
        $post = $request->except('_token');

        $filter_data['id_dealer'] = $post['dealer'];
        $filter_data['start_date'] = date($post['start_date']);
        $filter_data['end_date'] = date($post['end_date']);

        if($filter_data['id_dealer'] != 'all'){
            $filter_data['data'] = DatabaseH1::where('id_dealer', $filter_data['id_dealer'])->whereBetween('tgl_mohon', [$filter_data['start_date'], $filter_data['end_date']])->get()->toArray();
        }else{
            $filter_data['data'] = DatabaseH1::whereBetween('tgl_mohon', [$filter_data['start_date'], $filter_data['end_date']])->get()->toArray();
        }
        return $this->uploadH1($filter_data);
    }

    public function filterH2(Request $request){
        $post = $request->except('_token');

        $filter_data['id_dealer'] = $post['dealer'];
        $filter_data['start_date'] = date($post['start_date']);
        $filter_data['end_date'] = date($post['end_date']);

        if($filter_data['id_dealer'] != 'all'){
            $filter_data['data'] = DatabaseH2::where('id_dealer', $filter_data['id_dealer'])->whereBetween('tgl_nota_servis', [$filter_data['start_date'], $filter_data['end_date']])->get()->toArray();
        }else{
            $filter_data['data'] = DatabaseH2::whereBetween('tgl_nota_servis', [$filter_data['start_date'], $filter_data['end_date']])->get()->toArray();
        }

        return $this->uploadH2($filter_data);
    }

    public function uploadH1($filter_data = null)
    {   

        $new_data = array('result'=>[], 'columns'=>[], 'jabatan'=>'main_dealer', 'filter_data'=>[]);
        $showed_data = $this->listDataShowed();
        
        // dd(session('id_dealer'));exit;
        if(session()->has('id_dealer') && session('id_dealer') != null){
            if(isset($filter_data)){
                $data = $filter_data['data'];
                $new_data['filter_data']['id_dealer'] = $filter_data['id_dealer'];
                $new_data['filter_data']['start_date'] = $filter_data['start_date'];
                $new_data['filter_data']['end_date'] = $filter_data['end_date'];
            }else{
                $data = DatabaseH1::where('id_dealer',session('id_dealer'))->get()->toArray();
            } 

            $new_data['dealers'] = Dealer::where('id_dealer',session('id_dealer'))->first()->toArray(); 
            $new_data['jabatan'] = 'dealer';
        }else{
            if(isset($filter_data)){
                $data = $filter_data['data'];
                $new_data['filter_data']['id_dealer'] = $filter_data['id_dealer'];
                $new_data['filter_data']['start_date'] = $filter_data['start_date'];
                $new_data['filter_data']['end_date'] = $filter_data['end_date'];
            }else{
                $data = DatabaseH1::all()->toArray();
            }  

            $new_data['dealers'] = Dealer::all()->toArray(); 
        }
        
        foreach($data as $key1 => $item){
           foreach($item as $key2 => $value){
                if(in_array($key2, $showed_data['table_col_name'])){
                    $new_data['result'][$key1][$key2] = $value;
                }
            }
        }
        $new_data['columns'] = $showed_data['alias_col_name'];
        // dd($new_data);exit;
        return view('uploadH1', $new_data);
    }

    public function uploadH2($filter_data = null)
    {
        $new_data = array('result'=>[], 'columns'=>[], 'jabatan'=>'main_dealer', 'filter_data'=>[]);
        $new_data['columns'] = $this->getColumnsH2();

        if(session()->has('id_dealer') && session('id_dealer') != null){
            if(isset($filter_data)){
                $data = $filter_data['data'];
                $new_data['filter_data']['id_dealer'] = $filter_data['id_dealer'];
                $new_data['filter_data']['start_date'] = $filter_data['start_date'];
                $new_data['filter_data']['end_date'] = $filter_data['end_date'];
            }else{
                $data = DatabaseH2::where('id_dealer',session('id_dealer'))->get()->toArray();
            } 

            $new_data['dealers'] = Dealer::where('id_dealer',session('id_dealer'))->first()->toArray();
            $new_data['jabatan'] = 'dealer';
        }else{
            if(isset($filter_data)){
                $data = $filter_data['data'];
                $new_data['filter_data']['id_dealer'] = $filter_data['id_dealer'];
                $new_data['filter_data']['start_date'] = $filter_data['start_date'];
                $new_data['filter_data']['end_date'] = $filter_data['end_date'];
            }else{
                $data = DatabaseH2::all()->toArray();
            } 
            
            $new_data['dealers'] = Dealer::all()->toArray(); 
        }
        
        $count = 0;
        foreach($data as $item){
            $item['kode_dealer'] = Dealer::where('id_dealer',$item['id_dealer'])->first()['kode_dealer'] ?? '';
            $new_data['result'][$count] = array_values($item);
            unset($new_data['result'][$count][0]); // unset id primary key
            
            // move kode_dealer in index 2 (new kode dealer)
            array_splice($new_data['result'][$count], 2, 0, $item['kode_dealer']); // splice in at position 3
            
            // unser last item (old kode dealer)
            unset($new_data['result'][$count][sizeof($new_data['result'][$count]) - 1]);
            
            $count++;
        }

        // dd($new_data);exit;
        return view('uploadH2', $new_data);
    }

    public function import_excel_h1(Request $request) 
	{
        //Remove all data first
        DatabaseH1::truncate();
        
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_cluster',$nama_file);
        
        try {
            $import = Excel::import(new DatabaseH1Import, public_path('/file_cluster/'.$nama_file));
        }catch (\Exception $exc) {
            return redirect()->back()->with('error', 'Something Went Wrong');  
        }
        return redirect()->back()->with('success', 'File Successfully Uploaded'); 
 
    }

    public function import_excel_h2(Request $request) 
	{
        //Remove all data first
        DatabaseH2::truncate();
        
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_cluster',$nama_file);
       
        try {
            $import = Excel::import(new DatabaseH2Import, public_path('/file_cluster/'.$nama_file));
        }catch (\Exception $exc) {
            // dd($exc->getMessage());exit;
            return redirect()->back()->with('error', 'Something Went Wrong');  
        }
        return redirect()->back()->with('success', 'File Successfully Uploaded');  
    }
    
    public function export_excel_h1(Request $request){
        $post = $request->except('_token');
        $exporter = app()->makeWith(DatabaseH1Export::class, compact('post'));   
        return $exporter->download('database_h1.xlsx');
    }

    public function export_excel_h2(Request $request){
        $post = $request->except('_token');
        $exporter = app()->makeWith(DatabaseH2Export::class, compact('post'));   
        return $exporter->download('database_h1.xlsx');
    }

    public function getColumnsH2(){
        $columns = (new DatabaseH2)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[1]); //exclude id_database_h1
        unset($columns[38]); //exclude created_at
        unset($columns[39]); //exclude updated_at

        $count = 0;
        foreach($columns as $cols){
            if($count == 2)
                $columns_reset[$count] = 'Kode Dealer';
            
            $columns_reset[] = str_replace('_',' ',ucfirst($cols));
            $count++;
        }
        // dd($columns_reset);exit;
        return $columns_reset;
    }

    public function listDataShowed(){

        return [
            'alias_col_name' => [
                'No. Rangka',	
                'Kode Mesin',	
                'No. Mesi',	
                'Tgl Mohon',	
                'Nama',	
                'Alamat',	
                'Kel',	
                'Kec',	
                'Kode Kota',	
                'Cash/Credit',	
                'Finance Company',	
                'Down Payment',	
                'Tenor',	
                'Email',	
                'Jenis Sales',	
                'Gender',	
                'Tgl Lahir',	
                'Agama',	
                'Pekerjaan',	
                'Pengeluaran',	
                'Pendidikan',	
                'No.HP',	
                'No. Telp',	
                'diHubungi?',	
                'SalesPerson',	
                'Umur',	
                'Range Umur',	
                'TIPE',	
                '6JENIS',	
                '3JENIS',	
                'DP Aktual',	
                'Tenor',	
                'Cicilan',	
                'Tipe ATPM',	
                'Warna',	
                'Tipe Var Plus',	
                'No KK',
                'Kode Pekerjaan 2'
            ],
            
            'table_col_name' => [
                'no_rangka',
                'kode_mesin',
                'no_mesi',
                'tgl_mohon',
                'nama',
                'alamat',
                'kel',
                'kec',
                'kode_kota',
                'cash_credit',
                'finance_company',
                'down_payment',
                'tenor',
                'email',
                'jenis_sales',
                'gender',
                'tgl_lahir',
                'agama',
                'pekerjaan',
                'pengeluaran',
                'pendidikan',
                'no_hp',
                'no_telp',
                'dihubungi',
                'sales_person',
                'umur',
                'range_umur',
                'tipe',
                '6_jenis',
                '3_jenis',
                'DP_aktual',
                'tenor2',
                'cicilan',
                'tipe_ATPM',
                'warna',
                'tipe_var_plus',
                'no_KK',
                'kode_pekerjaan2'
            ]
        ];
    }
}
