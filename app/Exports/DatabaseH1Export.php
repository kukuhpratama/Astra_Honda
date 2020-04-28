<?php

namespace App\Exports;
use App\DatabaseH1;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class DatabaseH1Export implements FromView
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
        $query = DB::table('database_h1 AS db1')
            ->join('dealers AS dl', 'db1.id_dealer', 'dl.id_dealer')
            ->select(
            'dl.kode_dealer',
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
            '6_jenis AS enam_jenis',
            '3_jenis AS tiga_jenis',
            'DP_aktual',
            'tenor2',
            'cicilan',
            'tipe_ATPM',
            'warna',
            'tipe_var_plus',
            'no_KK',
            'kode_pekerjaan2'
        );

        if($this->id_dealer != 'all'){
            $query = $query->where('dl.id_dealer', $this->id_dealer);
        }
        $query = $query->whereBetween('db1.tgl_mohon', [$this->start_date, $this->end_date])->get()->toArray();

        return view('component.export_db_h1', [
            'database_h1' => $query
        ]);
    }
}
