<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Rol;

class UserController extends Controller
{
    public function create(){
        $rols = Rol::all();
    
        return view('usuarios.crear_usuarios', compact('rols'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'last_name' => ['required', 'string', 'max:10'],
            'second_last_name' => ['nullable', 'max:30'],
            'identification' => ['required', 'string', 'min:10', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'min:8', 'max:10', 'unique:users'],
            'rol' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'second_last_name' => $request->second_last_name,
            'identification' => $request->identification,
            'email' => $request->email,
            'username' => $request->username,
            'role_id' => $request->rol,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('dashboard');
    }

    public function list() 
    {
        $users = User::where('role_id', '<>' , 1)->get();
        
        return view('usuarios.lista_usuarios', compact('users'));
    }
}
