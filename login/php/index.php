<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register-UNI-INFORMA</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/login/CSS/estilos.css">
    <link rel="icon"
    href="data:image/png;base64,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"
    type="image/x-icon">
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
                    <form action="/Inicio.html" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico">
                        <input type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="/login/php/registro_usuario-be.php" method="POST" class="formulario__register">
                        <h2>
                            <span><img src="https://seeklogo.com/images/I/ies-uni-logo-0F9C272ADF-seeklogo.com.png" width="100px" alt=""></span>
                            Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña"name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="/login/js/script.js"></script>
</body>
</html>