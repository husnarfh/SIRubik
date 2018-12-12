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
            'materis.judul',
            'materis.file_materi',
            'materis.mata_pelajaran',
            'relawans.id',
            'relawans.nama_lengkap'
        )
        ->orderBy('kelas', 'asc')
        ->get()
        ;
        $hasil["hasil"]   = $data;     
        return $hasil;
    
    }

    public function getkelasmapel(Request $request){
        // {"kelas":"1", "mata_pelajaran":"bahasa_inggris"}
        $req = json_decode($request->getContent());
        $data = Materi::leftjoin('relawans', 'materis.id_uploader', '=', 'relawans.id')
        ->select(
            'materis.id',
            'materis.kelas',
            'materis.deskripsi',
            'materis.judul',
            'materis.file_materi',
            'materis.mata_pelajaran',
            'relawans.id',
            'relawans.nama_lengkap'
        )
        ->where("mata_pelajaran", $req->mata_pelajaran)
        ->where("kelas", $req->kelas)
        ->orderBy('kelas', 'asc')
        ->get()
        ;
        $hasil["hasil"]   = $data;     
        return $hasil;
        
    }

    public function uploadfile(Request $request){
      $file = $request->file('materi');
   
      //Display File Name
      $allowed = "pdf,docx,md,zip,rar,doc,xls,xlsx,ppt,pptx";
      $file_extension  = $file->getClientOriginalExtension();
      $allow = explode(',', $allowed);
         
      if(!in_array($file_extension,$allow )){
        return '{"error":"fail dilarang"}';
      }

      //Move Uploaded File
      $destinationPath = 'materi';
      $nama_file = $file->getClientOriginalName();
      $file->move($destinationPath,$file->getClientOriginalName());
      return '{"nama_file":'."$nama_file".'}';
   
    }

    public function upload(Request $request){
        $req = json_decode($request->getContent());
        $materi = new Materi;
    
        // $name = Storage::disk('local')->put('file_materi', $request->file_materi);
        // 
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
        if($query){
            $data = array(
                 'message'      => "File berhasil dihapus",
                 'status'       => $status
            );
        
           return json_encode($data); 
            
        }
        else{
            $data = array(
                 'message'      => "File gagal dihapus",
                 'status'       => 401
            );
        
           return json_encode($data); 
         

        }
        
    }
    

}
