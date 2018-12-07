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
        
        // dd($request->getContent(); ini phpinput
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
    public function register(request $request)
    {
        $validator = validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = hash::make($input['password']);
        $user = new relawan;
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->nama_lengkap = $input['nama_lengkap'];
        $success['token'] =  $user->createtoken('napp')->accesstoken;
        return response()->json(['success'=>$success], $this->successstatus);
    
    }

    public function details()
    {
        $user = Auth::user();   
        return response()->json(['success' => $user], $this->successStatus);
    }
}