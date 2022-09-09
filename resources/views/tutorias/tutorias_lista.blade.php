@extends('layout.app')
@section('title', 'Lista Tutorias')
@section('content')

<section class="content">
<div class="d-flex justify-content-end mt-4">
  <div class="card-table col-sm-6 p-1">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar....">
      <button class="btn btn-primary" type="button"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
     </div>
  </div>
  <div class="card-table col-sm-0.5 p-1">
    <a class="btn btn-primary" type="button" href="/crear-tutorias"><span><i class="fa-solid fa-plus"></i></span></a>
  </div>
</div>

<div class="table-responsive-lg tables">
    <table class="table table-lg">
      <thead>
        <tr class="table-style">
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
        @foreach ($tutorships as $tutorship)
        <tr>
            <td data-label="Carrera">{{ $tutorship->career_id }}</td>
            <td data-label="Asignatura">{{ $tutorship->course_id }}</td>
            <td data-label="Semestre">{{ $tutorship->career_id }}</td>
            <td data-label="Tutor">{{ $tutorship->teacher_id }}</td>
            <td data-label="Tems">{{ $tutorship->theme }}</td>
            <td data-label="Horarios">{{ $tutorship->date }}</td>
            <td data-label="Estudiantes maximo">{{ $tutorship->max_students }}</td>
            <td data-label="Estudiantes existentes">{{ $tutorship->career_id }}</td>
          <td class="acciones">
            <span>
              <i class="fa-solid fa-pen-to-square edit"></i>
            </span>
            <span class="borrar">
              <i class="fa-solid fa-trash-can delete"></i>
            </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>

@endsection