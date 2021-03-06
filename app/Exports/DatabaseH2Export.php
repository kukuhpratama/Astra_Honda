<?php

namespace App\Exports;
use App\DatabaseH2;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use DB;

class DatabaseH2Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    protected $id;
    protected $start_date;
    protected $end_date;

    public function __construct($post)
    {
        $this->id_dealer = $post['dealer_hidden'];
        $this->start_date = $post['start_date_hidden'];
        $this->end_date = $post['end_date_hidden'];
    }

    public function view(): View
    {
        $query = DB::table('database_h2 AS db2')
            ->join('dealers AS dl', 'db2.id_dealer', 'dl.id_dealer')
            ->select(
                'nomor',
                'dl.kode_dealer',
                'nomor_nama_AHASS',
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
            );

        if($this->id_dealer != 'all'){
            $query = $query->where('dl.id_dealer', $this->id_dealer);
        }
        $query = $query->whereBetween('db2.tgl_nota_servis', [$this->start_date, $this->end_date])->get()->toArray();

        return view('component.export_db_h2', [
            'database_h2' => $query
        ]);
    }
}
