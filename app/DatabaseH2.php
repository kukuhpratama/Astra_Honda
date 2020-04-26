<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatabaseH2 extends Model
{
    protected $primaryKey = 'id_database_h2';
    protected $table = 'database_h2';
    protected $fillable = [
        'id_dealer',
        'nomor',
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
    ];

    protected $hidden = ['id_database_h2', 'updated_at', 'created_at'];

    // protected $casts = [
    //     'tgl_nota_servis' => 'datetime'
    // ];

    public function getTableColumns()
    {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    public function dealer()
    {
        return $this->belongsTo('App\Dealer', 'id_dealer', 'id_dealer');
    }

}
