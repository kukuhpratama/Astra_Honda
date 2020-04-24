<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatabaseH1 extends Model
{
    protected $primaryKey = 'id_database_h1';
    protected $table = 'database_h1';
    protected $fillable = [
        'no_faktur', 
        'no_rangka',
        'kode_mesin',
        'no_mesi',
        'tgl_cetak',
        'nama',
        'alamat',
        'kel',
        'kec',
        'kode',
        'kota',
        'kode_pos'
    ];
    protected $hidden = ['id_database_h1', 'updated_at', 'created_at'];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
