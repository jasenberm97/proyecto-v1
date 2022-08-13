<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="{{ route('login') }}" class="formulario__login" method="POST">
                        <h2>Iniciar Sesión</h2>
                        @csrf
                        <input type="text" placeholder="Usuario" name="username" value="{{ old('username') }}">
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->                    
                    <form action="{{ route('register') }}" class="formulario__register" method="POST">
                        <h2>Regístrarse</h2>
                        @csrf
                        
                        <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" placeholder="Apellido Paterno" name="last_name" value="{{ old('last_name') }}" required>
                        @error('last_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" placeholder="Apellido Materno" name="second_last_name" value="{{ old('second_last_name') }}">
                        @error('second_last_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" placeholder="Cedula de Identificación" name="identification" value="{{ old('identification') }}" required>
                        @error('identification')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="text" placeholder="Nombre de Usuario" name="username" value="{{ old('username')}}" required>
                        @error('username')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="password" placeholder="Contraseña" name="password" required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <input type="password" placeholder="Confirmacion de Contraseña" name="password_confirmation" required>
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>