<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--FONTAWESONE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Login</title>
</head>
<body>
    <div class="d-flex justify-content-center mt-4">
        <div class="card col-sm-5 p-4">
            <div class="mb-3 d-flex justify-content-center">
                <h4 class="titulo">INICIAR SESIÓN</h4>
            </div>
            <div class="mb-2">
                <form action="{{ route('login') }}" method="POST" class="row g-3 formulario" id="formulario" autocomplete="off">
                    @csrf
                    <div class="col-lg-12 form-box">
                        <label class="form-label" for="perfil">Usuario*</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo solo permite caracteres">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="usuario" name="username" value="{{ old('username') }}">
                        </div>
                        <small class="error-text">El campo es obligatorio</small>
                    </div>
                    <div class="col-lg-12 form-box">
                        <label class="form-label" for="modulo">Contraseña*</label>
                        <div class="input-group" data-bs-toggle="tooltip" title="El campo solo permite caracteres">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="text" class="form-control" placeholder="Contraseña" name="password">
                        </div>
                        <small class="error-text">El campo es obligatorio</small>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="/recuperar-contraseña" class="text">Recuperar contraseña</a>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" id="submit-btn" disabled>GUARDAR</button>
                    <div class="d-flex justify-content-center">
                        <span class="text">¿Aun no tienes una cuenta? </span>
                        <a href="{{ route('register') }}" class="text signup-link"> Registrate ahora</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="{{ route('login') }}" method="POST" class="formulario" id="formulario" autocomplete="off">
                @csrf
                    <div class="input-field form-box">
                        <input type="text" placeholder="Usuario" placeholder="usuario" name="username" value="{{ old('username') }}" required>
                        <i class="uil uil-user icon"></i>
                        <div>
                            <small class="error-text">Introduce un nombre</small>
                        </div>
                    </div>
                    <div class="input-field form-box">
                        <input type="password" class="password" placeholder="Contraseña" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                        <div class="">
                            <small class="error-text">Introduce un nombre</small>
                        </div>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="logCheck" id="logCheck" disabled hidden>
                            <label for="logCheck" class="text" hidden>Remember</label>
                        </div>
                        <a href="/recuperar-contraseña" class="text">Recuperar contraseña</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Iniciar sesión" id="submit-btn" disabled>
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">¿Aun no tienes una cuenta?</span>
                    <a href="{{ route('register') }}" class="text signup-link">Registrate ahora</a>
                </div>
            </div>
        </div>
    </div>  -->
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</body>
</html>