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
        $user = Auth::user();
        $id = $user->id; 
        $data = Jadwal::where('id_relawan', $id)
        ->where('waktu', '>=', date('Y-m-d H:i:s') )
        ->orderBy('waktu', 'asc')
        ->get();

        $hasil["hasil"]   = $data;     
        return $hasil;

    }


    public function get_all(Request $request){
        $req = json_decode($request->getContent());
        $data = Jadwal::leftJoin('relawans', 'jadwals.id_relawan', '=', 'relawans.id')
        ->select(
            'id_jadwal',
            'mata_pelajaran',
            'id_relawan',
            'nama_lengkap', 
            'deskripsi',
            'waktu'
        )
        ->where('waktu', '>=', date('Y-m-d H:i:s') )
        ->orderBy('waktu', 'desc')
        ->get()
        ;
        $hasil["hasil"]   = $data;     
        return $hasil;


    }

    public function get_other(Request $request){
        $req = json_decode($request->getContent());
        $id = $req->id; 
        $data = Jadwal::leftJoin('relawans', 'jadwals.id_relawan', '=', 'relawans.id')
        ->where('id_relawan', $id)
        ->where('waktu', '>=', date('Y-m-d H:i:s') )
        ->orderBy('waktu', 'desc')
        ->get();
        $hasil["hasil"]   = $data;     
        return $hasil;

    }

}
    