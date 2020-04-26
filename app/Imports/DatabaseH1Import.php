<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToModel;
use App\DatabaseH1;
use App\Dealer;

class DatabaseH1Import implements ToModel, WithStartRow
{
    /**
    * @param Collection $collection
    */
    public function startRow(): int
    {
      return 2;
    }

    public function model(array $row)
    {   
        // urutan kode_dealer di file excel = 15 (index 14)

        $columns = (new DatabaseH1)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[1]); //exclude id_database_h1
        unset($columns[103]); //exclude created_at
        unset($columns[104]); //exclude updated_at

        $data = array();
        $i = 0;

        foreach($columns as $col){
            if($i != 14){
                $data[$col] = $row[$i];   
            }else{
                $data[$col] = $row[15];
                $i++; 
            }
            $i++;
        }

        // change format date
        $register_tgl = ['tgl_cetak', 'tgl_mohon', 'tgl_lahir'];
        foreach($register_tgl as $tgl){
            $data[$tgl] = $this->formatDate($data[$tgl]);
        }
        
        $data['id_dealer'] = Dealer::where('kode_dealer', $row[14])->first()['id_dealer'] ?? null;

        return new DatabaseH1($data);
    }

    public function formatDate($string_tgl){

        // remove all character except number
        $tgl = preg_replace('/[^0-9]/', '', $string_tgl);

        if($tgl != '' || $tgl != null){
            $day = substr($tgl,0,2);
            $month = substr($tgl,2,2);
            $year = substr($tgl,4,8);
    
            $tgl = date('Y-m-d',strtotime($year.'-'.$month.'-'.$day));
        }else{
            $tgl = null;
        }

        return $tgl;
    }
}
