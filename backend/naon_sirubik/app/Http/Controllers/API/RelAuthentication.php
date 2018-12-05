<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Relawan;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;

class RelAuthentication extends Controller
{

    public $successStatus = 200;
    public function getAuthIdentifierName(){
        return 'id_relawan';

    }
    public function login(Request $request){
        if(Auth::guard('rel')->attempt(['email' => request('email'), 'password' => request('password') ])){
            $relawan = Relawan::where('email',request('email'))->first();
            $success['token'] =  $relawan->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
    
    // ini ga kepake
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = new Relawan;
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->nama_lengkap = $input['nama_lengkap'];
        $success['token'] =  $user->createToken('nApp')->accessToken;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function details()
    {
        $user = Auth::user();   
        return response()->json(['success' => $user], $this->successStatus);
    }
}