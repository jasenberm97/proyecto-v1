@extends('layout.app')
@section('title', 'Lista Facultades')
@section('content')

<section class="content">

    <div class="recent--patientslf">
        <div class="title">
            <h2 class="section--title">LISTA DE FACULTADES</h2>
            <a href="/crear-facultades" class="add"><i class="ri-add-line"></i>Nueva facultad</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslf">
            <table>
                <thead>
                    <tr>
                        <th>Facultad</th>
                        <th>Carrera</th>
                        <th>Asignatura</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Facultad">FACULTAD DE CIENCIAS MATEMATICAS Y FISICAS</td>
                        <td data-label="Carrera">INGENIERIA EN SISTEMAS COMPUTACIONALES</td>
                        <td data-label="Asignatura">TUTORIAS</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">FACULTAD DE CIENCIAS MATEMATICAS Y FISICAS</td>
                        <td data-label="Carrera">INGENIERIA EN SISTEMAS COMPUTACIONALES</td>
                        <td data-label="Asignatura">TUTORIAS</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">FACULTAD DE CIENCIAS MATEMATICAS Y FISICAS</td>
                        <td data-label="Carrera">INGENIERIA EN SISTEMAS COMPUTACIONALES</td>
                        <td data-label="Asignatura">TUTORIAS</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">FACULTAD DE CIENCIAS MATEMATICAS Y FISICAS</td>
                        <td data-label="Carrera">INGENIERIA EN SISTEMAS COMPUTACIONALES</td>
                        <td data-label="Asignatura">TUTORIAS</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">FACULTAD DE CIENCIAS MATEMATICAS Y FISICAS</td>
                        <td data-label="Carrera">INGENIERIA EN SISTEMAS COMPUTACIONALES</td>
                        <td data-label="Asignatura">TUTORIAS</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">FACULTAD DE CIENCIAS MATEMATICAS Y FISICAS</td>
                        <td data-label="Carrera">INGENIERIA EN SISTEMAS COMPUTACIONALES</td>
                        <td data-label="Asignatura">TUTORIAS</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
