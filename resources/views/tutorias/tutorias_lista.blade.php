@extends('layout.app')
@section('title', 'Lista Tutorias')
@section('content')

<section class="content">

    <div class="recent--patientslu">
        <div class="title">
            <h2 class="section--title">LISTA DE TUTORIAS</h2>
            <a href="/crear-tutorias" class="add"><i class="ri-add-line"></i>Nuevo tutorias</a>
            <!-- <button class="add"><a href="/crear-usuario"><i class="ri-add-line"></i></a>Nuevo usuario</button> -->
        </div>
        <div class="tableslu">
            <table>
                <thead>
                    <tr>
                        <th>Carrera</th>
                        <th>Asignatura</th>
                        <th>Semestre</th>
                        <th>Tutor</th>
                        <th>Tema</th>
                        <th>Horarios</th>
                        <th>Estudiantes maximo</th>
                        <th>Estudiantes existentes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion web</td>
                        <td data-label="Semestre">10</td>
                        <td data-label="Tutor">Ing Rafael Marin</td>
                        <td data-label="Tems">Sistema de tutorias</td>
                        <td data-label="Horarios">20:00 22:00</td>
                        <td data-label="Estudiantes maximo">5</td>
                        <td data-label="Estudiantes existentes">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion web</td>
                        <td data-label="Semestre">10</td>
                        <td data-label="Tutor">Ing Rafael Marin</td>
                        <td data-label="Tems">Sistema de tutorias</td>
                        <td data-label="Horarios">20:00 22:00</td>
                        <td data-label="Estudiantes maximo">5</td>
                        <td data-label="Estudiantes existentes">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion web</td>
                        <td data-label="Semestre">10</td>
                        <td data-label="Tutor">Ing Rafael Marin</td>
                        <td data-label="Tems">Sistema de tutorias</td>
                        <td data-label="Horarios">20:00 22:00</td>
                        <td data-label="Estudiantes maximo">5</td>
                        <td data-label="Estudiantes existentes">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion web</td>
                        <td data-label="Semestre">10</td>
                        <td data-label="Tutor">Ing Rafael Marin</td>
                        <td data-label="Tems">Sistema de tutorias</td>
                        <td data-label="Horarios">20:00 22:00</td>
                        <td data-label="Estudiantes maximo">5</td>
                        <td data-label="Estudiantes existentes">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion web</td>
                        <td data-label="Semestre">10</td>
                        <td data-label="Tutor">Ing Rafael Marin</td>
                        <td data-label="Tems">Sistema de tutorias</td>
                        <td data-label="Horarios">20:00 22:00</td>
                        <td data-label="Estudiantes maximo">5</td>
                        <td data-label="Estudiantes existentes">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                    <tr>
                        <td data-label="Carrera">Ingenieria en sistemas computacionales</td>
                        <td data-label="Asignatura">Programacion web</td>
                        <td data-label="Semestre">10</td>
                        <td data-label="Tutor">Ing Rafael Marin</td>
                        <td data-label="Tems">Sistema de tutorias</td>
                        <td data-label="Horarios">20:00 22:00</td>
                        <td data-label="Estudiantes maximo">5</td>
                        <td data-label="Estudiantes existentes">2</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
