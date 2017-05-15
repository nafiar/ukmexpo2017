<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;    
use Session;
use Uuid;
use Redirect;
use App\User;
use App\Ukm;

class AuthController extends Controller
{
	public function login(){
		if(!session('user')['username']){
			return view('loginadmin');
		}
		else{
			return Redirect::to('admin/dashboard');
		}
	}

    public function doLogin(Request $request){
        //dd($request->username);
    	$messagesError = [ 
            'username.required' => 'Username tidak boleh kosong.',
            'password.required' => 'Password tidak boleh kosong.',
            ];

        $validator = Validator::make($request->all(), [ 
                'username' => 'required',
                'password' => 'required',    
            ], $messagesError);

        if($validator->fails()) 
        { 
            return Redirect::to($request->url())->withErrors($validator)->withInput();
        }
        else{
        	$username = $request->username;
        	$user = User::where('username', $username)->first();
        	if($user){
        		if(Hash::check($request->password, $user->password)){
        			if($user['role'] == 1){
                        $dataUkm = Ukm::where('id_ukm', $user->id_ukm_user)->first();
        				$dataUser = array('username' => $user['username'], 'id_ukm_user' => $user['id_ukm_user'], 'nama_ukm' => $dataUkm['nama_ukm'],);
        				$request->session()->put('user', $dataUser);
        				return Redirect::to('admin/dashboard');
        			}
        		}
        		else{
        			return Redirect::to($request->url())->withErrors('Username atau Password yang dimasukkan Salah');
        		}
        	}
        	else{
        		return Redirect::to($request->url())->withErrors('Username atau Password yang dimasukkan Salah');
        	}
        }
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return Redirect::to('/login')->with('message', 'Berhasil Logout');
    }

}
