@extends('layout.app')
@section('title', 'Lista de roles')
@section('content')

<section class="content">

    <div class="recent--patientslf">
        <div class="title">
            <h2 class="section--title">LISTA DE ROLES</h2>
            <a href="/crear-rol" class="add"><i class="ri-add-line"></i>Nuevo Rol</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslf">
            <table>
                <thead>
                    <tr>
                        <th>Nombre perfil</th>
                        <th>Nombre del modulo</th>
                        <th>Permiso por cada modulo</th>
                        <th>Opciones disponibles</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Nombre perfil">Administrador</td>
                        <td data-label="Nombre del modulo">Todos</td>
                        <td data-label="Permiso por cada modulo">Todos</td>
                        <td data-label="Opciones disponibles">Todos</td>
                        <td data-label="Estado">Activo</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Nombre perfil">Administrador</td>
                        <td data-label="Nombre del modulo">No todos</td>
                        <td data-label="Permiso por cada modulo">No todos</td>
                        <td data-label="Opciones disponibles">No todos</td>
                        <td data-label="Estado">Activo</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Nombre perfil">Administrador</td>
                        <td data-label="Nombre del modulo">Casi pocos</td>
                        <td data-label="Permiso por cada modulo">Casi pocos</td>
                        <td data-label="Opciones disponibles">Casi pocos</td>
                        <td data-label="Estado">Activo</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
