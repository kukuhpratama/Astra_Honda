<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name', 'email', 'password', 'jabatan', 'id_dealer'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dealer(){
        return $this->belongsTo('App\Dealer', 'id_dealer' , 'id_dealer');
    }
}
