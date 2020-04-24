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

class MainDealerController extends Controller
{
    public function uploadH1()
    {   
        $data = DatabaseH1::all()->toArray();
        $new_data = array('result'=>[], 'colums'=>[]);
        foreach($data as $item){
            $new_data['result'][] = array_values($item);
        }
        $new_data['columns'] = $this->getColumnsH1();

        return view('main_dealer.uploadH1', $new_data);
    }

    public function uploadH2()
    {
        $data = DatabaseH2::all()->toArray();
        $new_data = array('result'=>[], 'colums'=>[]);
        foreach($data as $item){
            $new_data['result'][] = array_values($item);
        }
        $new_data['columns'] = $this->getColumnsH2();

        return view('main_dealer.uploadH2', $new_data);
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
        $import = Excel::import(new DatabaseH1Import, public_path('/file_cluster/'.$nama_file));

        return redirect('/maindealer/H1');        
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
        $import = Excel::import(new DatabaseH2Import, public_path('/file_cluster/'.$nama_file));

        return redirect('/maindealer/H2');        
    }
    
    public function getColumnsH1(){
        $columns = (new DatabaseH1)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[103]); //exclude created_at
        unset($columns[104]); //exclude updated_at

        return $columns;
    }

    public function getColumnsH2(){
        $columns = (new DatabaseH2)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[38]); //exclude created_at
        unset($columns[39]); //exclude updated_at

        return $columns;
    }
}
