@extends('layout.app')
@section('title', 'Lista Asignaturas')
@section('content')

<section class="content">

    <div class="recent--patientslf">
        <div class="title">
            <h2 class="section--title">LISTA DE ASIGNATURAS</h2>
            <a href="/crear-asignaturas" class="add"><i class="ri-add-line"></i>Nueva asignatura</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslf">
            <table>
                <thead>
                    <tr>
                        <th>Facultad</th>
                        <th>Carrera</th>
                        <th>Asignatura</th>
                        <th>Semestre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Facultad">Facultad de ciencias matematicas y fisicas</td>
                        <td data-label="Carrera">Ingenieria civil</td>
                        <td data-label="Asignatura">Matematicas</td>
                        <td data-label="Semestre">1</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">Facultad de Ciencias Económicas</td>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Fisica</td>
                        <td data-label="Semestre">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">Facultad de Ciencias Médicas</td>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion orientada a objeto</td>
                        <td data-label="Semestre">4</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">Facultad de ciencias matematicas y fisicas</td>
                        <td data-label="Carrera">Ingenieria civil</td>
                        <td data-label="Asignatura">Matematicas</td>
                        <td data-label="Semestre">8</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">Facultad de Ciencias Económicas</td>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Fisica</td>
                        <td data-label="Semestre">3</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Facultad">Facultad de Ciencias Médicas</td>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion orientada a objeto</td>
                        <td data-label="Semestre">1</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
