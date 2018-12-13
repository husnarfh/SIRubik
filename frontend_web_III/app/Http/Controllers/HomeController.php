<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relawan;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.indeks_relawan');
    }

    public function input_relawan()
    {
        return view('admin.input_relawan');
    }
    
    public function kalender_pengajaran()
    {
        return view('admin.kalender_pengajaran');
    }

    public function indeks_relawan()
    {
        return view('admin.indeks_relawan');
    }

    public function add_relawan(Request $request)
    {
        // dd($request);

        $this->validate($request,[
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email'=>'required',
            'password'=>'required',
            'nama_lengkap'=>'required',
            'alamat'=>'required',
            'tgl_lahir'=>'required',
            'tgl_masuk'=>'required',
            'no_hp'=>'required',
            'tempat_lahir' => 'required',    
            'cv' => 'required',    
        ]);
        $relawan = new Relawan;
            
        if($request->hasFile('image')){
            $name = Storage::disk('local')->put('images', $request->image);
            $relawan->image = $name;     
        }
        else{
            $relawan->image = 'null.img';
        }


        if($request->hasFile('cv')){
            $name = Storage::disk('local')->put('cv', $request->image);
            $relawan->file_cv = $name;     
        }
        else{
            $relawan->file_cv = 'null.pdf';
        }
        $relawan->email         = $request->input('email');
        $relawan->password      = bcrypt($request->input('password'));
        $relawan->nama_lengkap  = $request->input('nama_lengkap');
        $relawan->alamat        = $request->input('alamat');
        $relawan->tempat_lahir  = $request->input('tempat_lahir');

        $relawan->tanggal_lahir = $request->input('tgl_lahir');
        $relawan->waktu_masuk   = $request->input('tgl_masuk');
        $relawan->no_hp          = $request->input('no_hp');
        $relawan->id_line = $request->input('id_line');
        $relawan->role = $request->input('peran');

        $relawan->save();
        return redirect('/admin/')->with('info','Book Saved Successfully!');
    }
}