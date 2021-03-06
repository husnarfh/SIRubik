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
        
        $req = json_decode($request->getContent());
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $validator = validator::make((array)$req, $rules);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        if(Auth::guard('rel')->attempt(['email' => $req->email, 'password' => $req->password ])){
            $relawan = Relawan::where('email',$req->email)->first();
            $da['token']    =  $relawan->createToken('token')->accessToken;
            $data =array(
                'message' => "Login Success",
                'data'  => $da,
                'status' => "200"
            );
            return json_encode($data);   
            
        }
        else{
            
            $data =array(
                 'message' => "Login Failed, Email or Password Wrong",
                 'status' => "404"
           );
            return json_encode($data);            
        }
    }
    
    public function logout(request $request){

        if (Auth::check()) {
            $user = Auth::user()->token();
            $user->revoke();
            $data =array(
                 'message' => "Logout Success",
                 'status' => "200"
             );
            return json_encode($data);   

        }
        
        $data =array(
                 'message' => "Logout Failed",
                 'status' => "404"
        );
        return json_encode($data);   

    }

    // not used too
    // ini ga kepake
    public function details()
    {
        $user = Auth::user();   
        return response()->json(['success' => $user], $this->successStatus);
    }
    
    public function register(request $request)
    {

        $rules = [
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ];
        $validator = validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = new relawan;
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->nama_lengkap = $input['nama_lengkap'];
        $success['token'] =  $user->createtoken('token')->accesstoken;
        return response()->json(['success'=>$success], $this->successstatus);
    
    }

 

}