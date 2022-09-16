<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {    
    return view('login.login');
})->middleware(['guest']);

/*Route::post('/login', function () {
    $credentials = request()->only('correo', 'contraseña');
});*/

Route::get('/dashboard', function(){
    $auth = Auth::user();
    return view('dashboard.dashboard', compact('auth'));
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/admin.php';
require __DIR__.'/auth.php';







Route::get('/home-tutorias-buscar', function () {
    return view('tutorias.tutorias_b');
});

///home-pruebas-list


Route::get('/home-tutorias-solicitud', function () {
    return view('tutorias.solicitud_tutoria');
});

Route::get('/home-actividades-manuales', function () {
    return view('actividades.actividades_m');
});

Route::get('/home-actividades-predefinidas', function () {
    return view('actividades.actividades_d');
});

Route::get('/home-pruebas-crear', function () {
    return view('pruebas.pruebas_c');
});

Route::get('/home-notas-evaluacion', function () {
    return view('pruebas.notas_evaluacion');
});

Route::get('/home-perfil', function () {
    return view('perfil.ver_perfil');
});
