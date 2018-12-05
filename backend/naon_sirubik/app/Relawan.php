<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Relawan extends Authenticatable 
{
    //
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password','tgl_lahir','tgl_masuk','id_line'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];



    
}
