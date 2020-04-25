<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToModel;
use App\DatabaseH2;

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
        $columns = (new DatabaseH2)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[1]); //exclude id_dealer
        unset($columns[38]); //exclude created_at
        unset($columns[39]); //exclude updated_at
        
        // dd($columns);exit;
        $data = array();
        $i = 0;
    
        foreach($columns as $col){
            $data[$col] = $row[$i];
            $i++;
        }

        return new DatabaseH2($data);
        
    }  
}
