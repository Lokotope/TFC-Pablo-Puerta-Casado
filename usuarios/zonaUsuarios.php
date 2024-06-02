<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Decorarte - Zona de usuarios</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Fuente de los Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librerias de estilo -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Estilos propios de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Hoja de estilo externa -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Librerias JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Scripts externos -->
    <script src="../js/main.js"></script>


    <style>
        html body{
            background-color: #E3AF69;
        }
    </style>

</head>

<body>
    <!-- Inicio Spinner de carga -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Fin Spinner de carga -->

    <!-- Inicio de login -->
    <div class="container h-100 pt-5">
        <div class="container d-flex2 align-items-center" style="margin-bottom: 100px;flex-direction: column;">
            <h3 class="text-dark boldBlack">Bienvenido a Decorarte</h3>
            <div>
                <a href="../index.php" class="nav-item nav-link text-white">Volver a la página principal</a>
            </div>
        </div>
        
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container" style="border:solid; border-color: white">
                        <img src="../img/logoPosibleRegistro.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="comprobarUsuario.php" method="post" id="datosUsuario">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nameUserRegistrado" class="form-control input_user" value=""
                                placeholder="Usuario">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="passUserRegistrado" class="form-control input_pass" value=""
                                placeholder="Contraseña">
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <input type="submit" class="btnAdelante btnTienda mt-3 boldBlack"
                                value="Iniciar sesión"></input>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        ¿No tienes una cuenta?<a href="nuevoUsuario.php">Registrate</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de login -->
    
</body>

</html>