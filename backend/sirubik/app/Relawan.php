<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    //
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
