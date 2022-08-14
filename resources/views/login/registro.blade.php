@extends('login.layout_login')
@section('title', 'Login')
@section('content')

<section class="content">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Crear una nueva cuenta</p>

      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Apellido Paterno" name="last_name" value="{{ old('last_name') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('last_name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Apellido materno" name="second_last_name" value="{{ old('second_last_name') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('second_last_name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cedula" name="identification" value="{{ old('identification') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('identification')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo Institucional" name="email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="username" value="{{ old('username') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('username')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>          
        </div>
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirmar contraseña" name="password_confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="{{ route('login') }}" class="text-center mt-3">Ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</section>
@endsection