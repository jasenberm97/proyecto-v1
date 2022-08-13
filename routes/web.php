<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\AdminController;

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

/*Route::get('/', function () {
    return view('login-register');
});

Route::post('/login', function () {
    $credentials = request()->only('correo', 'contraseña');
});*/

Route::get('/login', [CustomLoginController::class, 'login']);
Route::get('/login-post', [CustomLoginController::class, 'loginPost']);
Route::get('/registro', [CustomLoginController::class, 'registro']);
Route::get('/recuperar-contraseña', [CustomLoginController::class, 'recuperar_contraseña']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/crear-usuarios', [AdminController::class, 'crear_usuarios']);
Route::get('/crear-rol', [AdminController::class, 'crear_rol']);
Route::get('/listar-usuarios', [AdminController::class, 'listar_usuarios']);
Route::get('/listar-rol', [AdminController::class, 'listar_rol']);