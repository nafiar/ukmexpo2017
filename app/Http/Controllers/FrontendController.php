<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
    	return view('panitia.home');
    }

    public function login()
    {
    	return view('panitia.login');
    }

    public function daftarukm()
    {
    	return view('panitia.daftarukm');
    }

}
