<?php

namespace App\Exports;
use App\DatabaseH2;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class DatabaseH2Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('component.export_db_h2',[
            'database_h2' => DB::table('database_h2 AS db2')
                ->join('dealers AS dl', 'db2.id_dealer', 'dl.id_dealer')
                ->select(
                    'nomor',
                    'nomor_nama_AHASS',
                    'dl.kode_dealer',
                    'nomor_nota_servis',
                    'tgl_nota_servis',
                    'no_PKB',
                    'no_antrian',
                    'nama_tipe_kedatangan',
                    'alasan_ingat_service',
                    'dealer_sendiri',
                    'no_polisi',
                    'nomor_mesin',
                    'nomor_rangka',
                    'nama_motor',
                    'warna',
                    'tahun_rakit',
                    'nama_pemilik',
                    'alamat',
                    'kelurahan',
                    'kecamatan',
                    'kabupaten',
                    'no_telp',
                    'no_HP',
                    'km_sekarang',
                    'km_berikut',
                    'jenis',
                    'kode_jasa_part',
                    'grup_jasa_part',
                    'nama_jasa_part',
                    'satuan',
                    'jumlah',
                    'harga',
                    'total',
                    'tipe_pembayaran',
                    'nama_mekanik',
                    'user_login',
                    'uang_bayar'
                )->get()->toArray()
        ]);
    }
}
