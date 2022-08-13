<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    } 
    
    public function crear_usuarios(){
        return view('usuarios.crear_usuarios');
    } 

    public function crear_rol(){
        return view('roles.crear_rol');
    } 

    public function listar_usuarios(){
        return view('usuarios.lista_usuarios');
    } 

    public function listar_rol(){
        return view('roles.listar_rol');
    } 
}
