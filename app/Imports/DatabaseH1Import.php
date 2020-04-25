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
        $columns = (new DatabaseH1)->getTableColumns();
        unset($columns[0]); //exclude id_database_h1
        unset($columns[1]); //exclude id_dealer
        unset($columns[104]); //exclude created_at
        unset($columns[105]); //exclude updated_at

        // dd($columns);exit;
        $data = array();
        $i = 0;

        foreach($columns as $col){
            $data[$col] = $row[$i];
            $i++;
        }

        // add id_dealer
        $data['id_dealer'] = Dealer::where('kode_dealer', $data['kode_dealer'])->first['id_dealer'] ?? null;

        return new DatabaseH1($data);
    }
}
