<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    protected $fillable = [
        'kode_dealer', 'nama_dealer'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function database_h1(){
        return $this->hasMany('App\DatabaseH1', 'id_dealer');
    }

    public function database_h2(){
        return $this->hasMany('App\DatabaseH2', 'id_dealer');
    }

    public function user(){
        return $this->hasOne('App\User', 'id_dealer');
    }
}
