<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolController;

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
    return view('dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::get('/crear-usuarios', [UserController::class, 'create']);
Route::post('/crear-usuarios', [UserController::class, 'store']);
Route::get('/listar-usuarios', [UserController::class, 'list']);

Route::get('/crear-rol', [RolController::class, 'create']);
Route::post('/crear-rol', [RolController::class, 'store']);
Route::get('/listar-rol', [RolController::class, 'list']);