<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function create(){    
        return view('roles.crear_rol');
    }

    public function list(){
        $rols = Rol::all();
        return view('roles.listar_rol', compact('rols'));
    }
    
    public function store(Request $request){
        
        $data = $request->validate([
            'name' => ['required','unique:rols'],
            'description' => ['required', 'string'],

        ]);

        Rol::create($data);

        return redirect()->route('list_rols');
    }

    public function delete(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('list_rols');
    }
}
