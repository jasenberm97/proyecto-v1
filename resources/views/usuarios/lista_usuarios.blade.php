@extends('layout.app')
@section('title', 'Lista de usuarios')
@section('content')

<section class="content">

    <div class="recent--patientslu">
        <div class="title">
            <h2 class="section--title">LISTA DE USUARIOS</h2>
            <a href="/crear-usuarios" class="add"><i class="ri-add-line"></i>Nuevo usuario</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslu">
            <table>
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Perfil</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td data-label="#">{{ $key + 1 }}</td>
                        <td data-label="Nombres">{{ $user->name }}</td>
                        <td data-label="Apellidos">{{ $user->last_name }}</td>
                        <td data-label="Cedula">{{ $user->identification }}</td>
                        <td data-label="Usuario">{{ $user->username }}</td>
                        <td data-label="Correo">{{ $user->email }}</td>
                        <td data-label="Contraseña">{{ $user->role_id }}</td>
                        <td data-label="Perfil">{{ $user->role_id }}</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
