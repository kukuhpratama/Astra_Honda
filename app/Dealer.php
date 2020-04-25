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

}
