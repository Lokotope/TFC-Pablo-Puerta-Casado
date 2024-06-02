<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Decorarte - Bienvenido</title>
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

    <!-- Inicio de registro nuevo usuario -->
    <div class="container h-100 pt-5">
        <div class="container d-flex2 align-items-center" style="margin-bottom: 100px;flex-direction: column;">
            <h3 class="boldBlack txtResponsive">Creación de un nuevo usuario Decorarte</h3>
            <div>
                <a href="../index.php" class="nav-item nav-link text-white">Volver a la página principal</a>
            </div>
        </div>

        <div class="d-flex justify-content-center h-100">
            <div class="user_card2 w-100">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="../img/logoPosibleRegistro.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container2">
                    <form action="altaUsuario.php" method="post" id="datosUsuario"
                        class="form_container_regis2 w-100 mt-5">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <h3>Datos del usuario</h3>
                                <div class="form-group">
                                    <input type="text" name="nameUserRegistrado" id="nameUserRegistrado"
                                        class="form-control mt-2" placeholder="Nombre de usuario" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="passUserRegistrado" id="passUserRegistrado"
                                        class="form-control mt-2" placeholder="Contraseña" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="checkPass" id="checkPass" class="form-control mt-2"
                                        placeholder="Vuelva a introducir la contraseña" required>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <h3 class="txtResponsiveRegistro">Datos personales del propietario</h3>

                                <!-- Nombre y Apellidos -->
                                <div class="form-group row gx-2">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="nombreOriginalNewUser" id="nombreOriginalNewUser"
                                            class="form-control" placeholder="Nombre" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="apellidosNewUser" id="apellidosNewUser"
                                            class="form-control" placeholder="Apellidos" required>
                                    </div>
                                </div>

                                <!-- Teléfono y Email -->
                                <div class="form-group row gx-2 mt-2">
                                    <div class="col-12 col-sm-6">
                                        <input type="tel" name="tlfnContacto" id="tlfnContacto" class="form-control"
                                            placeholder="Teléfono de contacto" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="emailUsuario" id="emailUsuario" class="form-control"
                                            placeholder="Email" required>
                                    </div>
                                </div>

                                <!-- Dirección para envíos -->
                                <div class="form-group row mt-2">
                                    <div class="col-12">
                                        <input type="text" name="direccionEnvios" id="direccionEnvios"
                                            class="form-control" placeholder="Dirección para envíos" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="btnAdelante btnTienda btnTienda2 mt-5 mb-5 text-center" style="width=auto;"  value="Continuar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>