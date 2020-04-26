<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToModel;
use App\DatabaseH2;
use App\Dealer;
use PHPExcel_Style_NumberFormat;

class DatabaseH2Import implements ToModel,WithStartRow
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
        // urutan kode_dealer di file excel = 3 (index 2)

        $columns = (new DatabaseH2)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[1]); //exclude id_dealer
        unset($columns[38]); //exclude created_at
        unset($columns[39]); //exclude updated_at

        // dd($columns);exit;
        $data = array();
        $i = 0;

        foreach($columns as $col){
            if($i != 2){
                $data[$col] = $row[$i];   
            }else{
                $data[$col] = $row[3];
                $i++; 
            }
            $i++;
        }

         // change format date
         $register_tgl = ['tgl_nota_servis'];
         foreach($register_tgl as $tgl){
             $data[$tgl] = $this->formatDate($data[$tgl]);
         }
        
         $data['id_dealer'] = Dealer::where('kode_dealer', $row[2])->first()['id_dealer'] ?? null;

        // dd($data);exit;
        
        return new DatabaseH2($data);
    }

    public function formatDate($string_tgl){

        if($string_tgl != '' || $string_tgl != null){
            $unix_date = ($string_tgl - 25569) * 86400;
            $string_tgl = 25569 + ($unix_date / 86400);
            $unix_date = ($string_tgl - 25569) * 86400;
            $tgl = gmdate("Y-m-d H:i:s", $unix_date);
        }else{
            $tgl = null;
        }

        return $tgl;
    }
}
