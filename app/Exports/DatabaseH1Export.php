<?php

namespace App\Exports;
use App\DatabaseH1;

use Maatwebsite\Excel\Concerns\FromCollection;

class DatabaseH1Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DatabaseH1::select(
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
        )->get();
    }
}
