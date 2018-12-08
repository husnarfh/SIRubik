<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Relawan;
use App\Jadwal;
use App\Materi;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;



class MateriController extends Controller
{
    
// 5. Materi
//    a. id_materi (integer)
//    b. mata_pelajaran (string)
//    c. file_materi (string | konek ke file)
//    d. kelas (string)
//    e. id_uploader (string) <= id_relawan | 1 if admin
    public function get(Request $request){
        $req = json_decode($request->getContent());
        // $data = Materi::orderBy('kelas', 'asc')->get();
        $data = Materi::leftjoin('relawans', 'materis.id_uploader', '=', 'relawans.id')
        ->select(
            'materis.id',
            'materis.kelas',
            'materis.deskripsi',
            'materis.file_materi',
            'relawans.id',
            'relawans.nama_lengkap'
        )
        ->orderBy('kelas', 'asc')
        ->get()
        ;
        return response()->json($data);

    }

    public function upload(Request $request){
        // 
        $req = json_decode($request->getContent());
        
        
    }

}
