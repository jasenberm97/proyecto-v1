@extends('layout.app')
@section('title', 'Usuarios')
@section('content')

<section class="content">
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-10 p-3">
            <div class="mb-3 d-flex justify-content-between">
                <h4 class="titulo">CREAR USUARIO</h4>
                <a href="/listar-usuarios" style="font-size:30px; width:50px; color:#000"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="mb-2">
                <form method="POST" action="{{ route('create_user') }}" class="row g-3 form-user" id="form-user" autocomplete="off">
                @csrf
                    <div class="col-md-12 form-box">
                        <label class="form-label" for="nombre">Nombre</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="El nombre debe empezar con mayúscula">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nombre">
                        </div>
                        <small class="error-text">Ejemplo: Luis</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="apellidoP">Apellido paterno</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="El apellido debe empezar con mayúscula">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required placeholder="Apellido paterno">
                        </div>
                        <small class="error-text">Ejemplo: Cevallos</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="apellidoM">Apellido materno</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="second_last_name" value="{{ old('second_last_name') }}" placeholder="Apellido materno">
                        </div>
                        <small class="error-text">Ejemplo: Cerezo</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="cedula">Cédula</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="Solo permite numeros hasta 10 digitos">
                            <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                            <input type="number" class="form-control" name="identification" value="{{ old('identification') }}" required placeholder="Cedula">
                        </div>
                        <small class="error-text">Ejemplo: 0999999999</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="usuario">Usuario</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo permite de 8 - 10 caracteres">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required placeholder="Usuario">
                        </div>
                        <small class="error-text">Ejemplo: lcevallos</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="correo">Correo Institucional</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Correo Institucional">
                        </div>
                        <small class="error-text">Ejemplo: lcevallos@ug.edu.ec</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="perfil">Perfil</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <select class="form-select perfil-select" name="rol" value="{{ old('rol') }}">
                                <option selected>Selecciona perfil</option>
                                @foreach ($rols as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <small class="error-text">Seleccione un rol</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="contraseña">Contraseña</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo permite de 8 - 10 caracteres">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                        <small class="error-text">Ejemplo: Lcevalos12</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <label class="form-label" for="confirmar">Confimar contraseña</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo permite de 8 - 10 caracteres">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confimar contraseña" required>
                        </div>
                        <small class="error-text">No coincide con la contraseña</small>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" id="submit-btn" disabled>GUARDAR</button>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</section>

@endsection