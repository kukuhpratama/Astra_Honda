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
use DB;

class DatabaseController extends Controller
{   

    public function index()
    {
        return view('main_dealer.home');
    }

    public function uploadH1()
    {   
        $showed_data = $this->listDataShowed();

        $data = DatabaseH1::all()->toArray();
        $new_data = array('result'=>[], 'columns'=>[]);
        foreach($data as $key1 => $item){
           foreach($item as $key2 => $value){
                if(in_array($key2, $showed_data['table_col_name'])){
                    $new_data['result'][$key1][$key2] = $value;
                }
            }
        }
        $new_data['columns'] = $showed_data['alias_col_name']; 
        return view('uploadH1', $new_data);
    }

    public function uploadH2()
    {
        $data = DatabaseH2::all()->toArray();
        $new_data = array('result'=>[], 'columns'=>[]);
        foreach($data as $item){
            $new_data['result'][] = array_values($item);
        }
        $new_data['columns'] = $this->getColumnsH2();
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
            return redirect()->back()->with('error', 'Something Went Wrong');  
        }
        return redirect()->back()->with('success', 'File Successfully Uploaded');  
    }
    
    public function export_excel_h1(){
        return Excel::download(new DatabaseH1Export, 'database_h1.xlsx');
    }

    public function export_excel_h2(){
        return Excel::download(new  DatabaseH2Export, 'database_h2.xlsx');
    }

    // public function getColumnsH1(){
    //     $columns = (new DatabaseH1)->getTableColumns();
    //     unset($columns[0]); //exclude id_database_h1
    //     unset($columns[103]); //exclude created_at
    //     unset($columns[104]); //exclude updated_at

    //     return $columns;
    // }

    public function getColumnsH2(){
        $columns = (new DatabaseH2)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[38]); //exclude created_at
        unset($columns[39]); //exclude updated_at

        return $columns;
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
