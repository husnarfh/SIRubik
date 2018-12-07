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

    public function get_self(Request $request){
        // select jadwal where id == $id
        $user = Auth::user();
        $id = $user->id; 
        Jadwal::where('id');
    }


    public function get_all(Request $request){
    // select all jadwal
        $user = Auth::user();
        $id = $user->id; 
        // Jadwal::where('1',);
    }

    public function get_other(Request $request){
        // select jadwal where id = 
        $id = $request(); 
        Jadwal::where('id');
    }

}
