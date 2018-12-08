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
        $req = json_decode($request->getContent());
        $user = Auth::user();
        $id = $user->id; 
        $rel = Relawan::where('id', $id);
        $data = $rel->get(['email', 
                            'nama_lengkap', 
                            'alamat', 
                            'image', 
                            'tempat_lahir', 
                            'tanggal_lahir', 
                            'waktu_masuk', 
                            'no_hp', 
                            'id_line', 
                            'role']);
        
        return response()->json($data);
    }

    public function get_other(Request $request){
        // select jadwal where id == $id
        $req = json_decode($request->getContent());
        $id = $req->id; 
        $rel = Relawan::where('id', $id);
        $data = $rel->get(['nama_lengkap', 'image', 'waktu_masuk', 'no_hp', 'id_line', 'role']);
        return response()->json($data);
    }

    public function get_all(Request $request){
        $data = Relawan::orderBy('nama_lengkap', 'asc')->get(['email', 'nama_lengkap', 'alamat', 'image', 'tempat_lahir', 'tanggal_lahir', 'waktu_masuk', 'no_hp', 'id_line', 'role']);
        return response()->json($data);
    }

    public function edit_profile(Request $request){
        $req = json_decode($request->getContent());
        
        $user = Auth::user();
        $id = $user->id; 
        $rel = Relawan::where('id', $id)->first();
        // sayang dibuang hehe
        // $rel = ($rel->getAttributes());
        
        foreach ($req as $key => $value) {
            $rel->$key = $req->$key;
        }
        $rel->save();
        $messages = "Profile updated";
        $status = 200;
        $data =array(
                 'message' => $messages,
                 'status' => $status
        );        
        return json_encode($data);
    }



    // still not work. ga tau kenapa
    public function edit_password(Request $request){

        $req = json_decode($request->getContent());
        $old = $req->old_password; 
        $new = $req->new_password; 
        
        $user = Auth::user();
        $id = $user->id; 
        $rel = Relawan::where('id', $id)->first();
        $status = 200;
        if($rel->password == $old){
            $messages = "Password lama tidak sesuai";
            $status = 404;    
        }
        else{
            $rel->password = bcrypt($new);
            $rel->save();

            $messages = "Password Changed";
        }

        $data =array(
                 'message' => $messages,
                 'status' => $status
        );
        
        return json_encode($data); 
    }

}
