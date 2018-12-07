<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Relawan;
use App\Jadwal;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;

class Profile extends Controller
{
    public function get_self(Request $request){
        // select jadwal where id == $id
        $user = Auth::user();
        $id = $user->id; 
        $rel = Relawan::where('id', $id);
        $data = $rel->get(['email', 'nama_lengkap', 'alamat', 'image', 'tempat_lahir', 'tanggal_lahir', 'waktu_masuk', 'no_hp', 'id_line', 'role']);
        return response()->json($data);
    }

    public function get_other(Request $request){
        // select jadwal where id == $id
        $id = $request('id'); 
        $rel = Relawan::where('id', $id);
        $data = $rel->get(['nama_lengkap', 'image', 'waktu_masuk', 'no_hp', 'id_line', 'role']);
        return response()->json($data);
    }

    public function get_all(Request $request){
        // select jadwal where id == $id
        $data = Relawan::orderBy('nama_lengkap', 'asc')->get(['email', 'nama_lengkap', 'alamat', 'image', 'tempat_lahir', 'tanggal_lahir', 'waktu_masuk', 'no_hp', 'id_line', 'role']);
        return response()->json($data);
    }





}
