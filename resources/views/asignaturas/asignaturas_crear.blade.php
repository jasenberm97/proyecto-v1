@extends('layout.app')
@section('title', 'Crear Asignaturas')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-asignaturas" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Asignaturas</div>

            <form action="#">
                <div class="user-details">
                    <select name="facultad" class="select-css" name="faculty" value="{{ old('faculty') }}" required>
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                    <select name="carrera" class="select-css" name="race" value="{{ old('race') }}" required>
                        @foreach ($careers as $career)
                            <option value="{{ $career->id }}">{{ $career->name }}</option>
                        @endforeach
                    </select>
                    <select name="asignatura" class="select-css" name="course" value="{{ old('course') }}" required>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                    <select name="semestre" class="select-css" name="semester" value="{{ old('semester') }}" required>
                        <option value="Primero">1</option>
                        <option value="Segundo">2</option>
                        <option value="Tercero">3</option>
                        <option value="Cuarto">4</option>
                        <option value="Quinto">5</option>
                        <option value="Sexto">6</option>
                        <option value="Septimo">7</option>
                        <option value="Octavo">8</option>
                        <option value="Noveno">9</option>
                        <option value="Decimo">10</option>
                    </select>
                </div>
                <div class="button">
                    <input type="submit" value="Guardar">
                </div>
            </form>
            </div>
        </div>
    </div>
    @endsection