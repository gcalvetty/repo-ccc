<?php

namespace sis_ccc\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ErrorController extends Controller
{
    public function index(Request $request)
    {        
        if($request->session()->has('Ruta-Acceso'))
        {
        return view('homeccc');            
        }
        else{
        Auth::logout();
        Session::flush(); 
	//return Redirect::route('homeCCC');
        return view('homeccc');         // welcome
        }
       
    }
}
