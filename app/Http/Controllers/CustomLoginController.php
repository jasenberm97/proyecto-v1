<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomLoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function loginPost(){
        return redirect('/dashboard');
    }

    public function recuperar_contraseña(){
        return view ('/login.recuperar_contraseña');
    }

    public function registro(){
        return view ('/login.registro');
    }
}
