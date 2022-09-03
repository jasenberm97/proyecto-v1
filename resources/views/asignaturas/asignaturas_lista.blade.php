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
                    @foreach ($courses as $course)                
                        <tr>
                            <td data-label="Facultad">{{ $course->career->faculty->name }}</td>
                            <td data-label="Carrera">{{ $course->career->name }}</td>
                            <td data-label="Asignatura">{{ $course->name }}</td>
                            <td data-label="Semestre">1</td>
                            <td>
                                <span>
                                    <i class="ri-edit-line edit"></i>
                                    <i class="ri-delete-bin-line delete"></i>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
