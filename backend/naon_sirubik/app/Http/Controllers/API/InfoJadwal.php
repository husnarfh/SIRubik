<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Relawan;
use App\Jadwal;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;

class InfoJadwal extends Controller
{
    public function get(){
        $user = Auth::user();
        $id = $user->id; 
        Jadwal::where('id');
    }
}
