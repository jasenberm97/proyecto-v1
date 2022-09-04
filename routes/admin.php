<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\TutorshipController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/listar-rol', [RolController::class, 'list'])->name('list_rols');
    Route::get('/crear-rol', [RolController::class, 'create'])->name('create_rol');
    Route::post('/crear-rol', [RolController::class, 'store']);
    Route::put('/editar-rol', [RolController::class, 'update']);
    Route::delete('/eliminar-rol/{rol}', [RolController::class, 'delete'])->name('delete_rol');
    
    Route::get('/listar-usuarios', [UserController::class, 'list'])->name('list_users');    
    Route::get('/crear-usuarios', [UserController::class, 'create'])->name('create_user');
    Route::post('/crear-usuarios', [UserController::class, 'store']);
    Route::put('/editar-usuarios', [UserController::class, 'update']);
    Route::delete('/eliminar-usuarios/{user}', [UserController::class, 'delete'])->name('delete_user');

    Route::get('/listar-facultades',[FacultyController::class, 'list'])->name('list_faculties');
    Route::get('/crear-facultades', [FacultyController::class, 'create'])->name('create_faculty');
    Route::post('/crear-facultades', [FacultyController::class, 'store']);
    Route::put('/editar-facultades', [FacultyController::class, 'update']);
    Route::delete('/eliminar-facultades/{faculty}', [FacultyController::class, 'delete'])->name('delete_faculty');

    Route::get('/listar-asignaturas', [CourseController::class, 'list'])->name('list_courses');
    Route::get('/crear-asignaturas', [CourseController::class, 'create'])->name('create_course');
    Route::post('/crear-asignaturas', [CourseController::class, 'store']);
    Route::put('/editar-asignaturas', [CourseController::class, 'update']);
    Route::delete('/eliminar-asignaturas/{course}', [CourseController::class, 'delete'])->name('delete_course');
    
    Route::get('/listar-tutorias', [TutorshipController::class, 'list'])->name('list_tutorship');
    Route::get('/crear-tutorias', [TutorshipController::class, 'create'])->name('create_tutorship');
    Route::post('/crear-tutorias', [TutorshipController::class, 'store']);
    Route::put('/editar-tutorias', [TutorshipController::class, 'update']);
    Route::delete('/eliminar-tutorias/{tutorship}', [TutorshipController::class, 'delete'])->name('delete_tutorship');
    
    Route::get('/cursos/{id}', [TutorshipController::class, 'getCourses']);
    Route::get('/carreras/{id}', [TutorshipController::class, 'getCareers']);

});