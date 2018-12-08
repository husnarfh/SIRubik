<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Storage;
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
        $req = json_decode($request->getContent());
        $materi = new Materi;
    
        // $name = Storage::disk('local')->put('file_materi', $request->file_materi);
        $name = "";
        $status = 200;
        foreach ($req as $key => $value) {
            $materi->$key = $req->$key;
        }

        $materi->file_materi = $name; 
        $materi->save();
        
        $data = array(
                 'message'      => "Materi berhasil ditambahkan",
                 'status'       => $status
        );
        
        return json_encode($data); 

    }

    public function delete(Request $request){
        $req = json_decode($request->getContent());
        // dd($req);
        $status = 200;
        $query = Materi::where('id', '=',$req->id_materi)
        ->where('id_uploader', '=', Auth::User()->id)
        ->delete();

        $data = array(
                 'message'      => "File berhasil dihapus",
                 'status'       => $status
        );
        
        return json_encode($data); 

    }
    

}
