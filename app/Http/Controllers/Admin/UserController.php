<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Rol;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create(){
        $rols = Rol::where('name','<>','admin')->get();
    
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
            'password' => ['required', 'confirmed', Password::default()],
            'rol' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'second_last_name' => $request->second_last_name,
            'identification' => $request->identification,
            'email' => $request->email,
            'username' => $request->username,
            'rol_id' => $request->rol,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('list_users');
    }

    public function list() 
    {
        $users = User::where('rol_id', '<>' , 1)->get();
        
        return view('usuarios.lista_usuarios', compact('users'));
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('list_users');
    }
}
