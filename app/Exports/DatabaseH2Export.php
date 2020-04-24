<?php

namespace App\Exports;
use App\DatabaseH2;

use Maatwebsite\Excel\Concerns\FromCollection;

class DatabaseH2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DatabaseH2::all();
    }
}
