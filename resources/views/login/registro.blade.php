<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--FONTAWESONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Register</title>
</head>
<body>
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-8 p-4">
            <div class="mb-3 d-flex justify-content-center">
                <h4 class="titulo">REGISTRATE</h4>
            </div>
            <div class="mb-2">
                <form action="{{ route('register') }}" method="POST" class="row g-3 form-user" id="form-user" autocomplete="off">
                @csrf
                    <div class="col-md-12 form-box">
                        <!-- <label class="form-label" for="nombre">Nombre</label> -->
                        <div class="input-group" data-bs-toggle="tooltip" title="El nombre debe empezar con mayúscula">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Nombre">
                        </div>
                        <small class="error-text">Ejemplo: Luis</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <!-- <label class="form-label" for="apellidoP">Apellido paterno</label> -->
                        <div class="input-group" data-bs-toggle="tooltip" title="El apellido debe empezar con mayúscula">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required placeholder="Apellido paterno">
                        </div>
                        <small class="error-text">Ejemplo: Cevallos</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <!-- <label class="form-label" for="apellidoM">Apellido materno</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="second_last_name" value="{{ old('second_last_name') }}" placeholder="Apellido materno">
                        </div>
                        <small class="error-text">Ejemplo: Cerezo</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <!-- <label class="form-label" for="cedula">Cédula</label> -->
                        <div class="input-group" data-bs-toggle="tooltip" title="Solo permite numeros hasta 10 digitos">
                            <span class="input-group-text"><i class="fa-solid fa-address-card"></i></span>
                            <input type="number" class="form-control" name="identification" value="{{ old('identification') }}" required placeholder="Cedula">
                        </div>
                        <small class="error-text">Ejemplo: 0999999999</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <!-- <label class="form-label" for="usuario">Usuario</label> -->
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo permite de 8 - 10 caracteres">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required placeholder="Usuario">
                        </div>
                        <small class="error-text">Ejemplo: lcevallos</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <!-- <label class="form-label" for="correo">Correo Institucional</label> -->
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Correo Institucional">
                        </div>
                        <small class="error-text">Ejemplo: lcevallos@ug.edu.ec</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <!-- <label class="form-label" for="contraseña">Contraseña</label> -->
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo permite de 8 - 10 caracteres">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                        <small class="error-text">Ejemplo: Lcevalos12</small>
                    </div>
                    <div class="col-lg-6 form-box">
                        <!-- <label class="form-label" for="confirmar">Confimar contraseña</label> -->
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo permite de 8 - 10 caracteres">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-eye-slash"></i></span>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confimar contraseña" required>
                        </div>
                        <small class="error-text">No coincide con la contraseña</small>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" id="submit-btn" disabled>GUARDAR</button>
                    <div class="d-flex justify-content-center">
                        <span class="text">¿Ya tienes una cuenta?</span>
                        <a href="{{ route('login') }}" class="text signup-link">Inicia sesión</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/registro.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="container">
        <div class="title">Registrarse</div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Apellido paterno" name="last_name" value="{{ old('last_name') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Apellido materno" name="second_last_name" value="{{ old('second_last_name') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('second_last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Numero de cédula" name="identification" value="{{ old('identification') }}" required>
                    <i class="uil uil-card-atm icon"></i>
                </div>
                @error('identification')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Usuario" name="username" value="{{ old('username') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="email" placeholder="Correo institucional" name="email" value="{{ old('email') }}" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="password" class="password" placeholder="Contraseña" name="password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="password" class="password" placeholder="Confirmar contraseña" name="password_confirmation" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Registrarse">
            </div>
        </form>
        <div class="login-signup">
            <span class="text">¿Ya tienes una cuenta?</span>
            <a href="{{ route('login') }}" class="text signup-link">Inicia sesión</a>
        </div>

    </div>

    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html> -->