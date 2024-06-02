<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Decorarte - Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Fuentes de Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Fuente de los Iconos -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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
    </head>

    <body>

         <!-- Inicio Spinner de carga -->
         <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Fin Spinner de carga -->

    <?php
        extract($_POST);
     
        // Conexion a la BBDD
        include("../conexionBBDD/datosConexion.php");

        require_once("../conexionBBDD/datosConexion.php");

        try{
            // Consulta con marcadores
            $consulta = "SELECT * FROM usuarios WHERE user = :usuario";
        
            // Preparación de la consulta
            $resultado = $conexion->prepare($consulta);
        
            // Identificación de marcadores
            $resultado->bindValue(":usuario", $nameUserRegistrado, PDO::PARAM_STR);
        
            // Ejecución de la consulta 
            $resultado->execute();
        
            // Almacenar el resultado obtenido
            $infoUsuario = $resultado->fetch(PDO::FETCH_ASSOC);

            // Comprobar que el usuario existe y la contraseña es correcta
            if ($infoUsuario && password_verify($passUserRegistrado, $infoUsuario['password'])) {
                $_SESSION['Usuario'] = $infoUsuario; // Le doy a la variable $_SESSION el valor del nombre introducid por el usuario
                ?>
                <script>
                    window.alert("Login exitoso! Bienvenid@");
                    window.location.href = "miUsuario.php";
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    window.alert("ERROR! El nombre de usuario o la contraseña son incorrectos.");
                    window.location.href = "zonaUsuarios.php";
                </script>
                <?php
                // var_dump($passUserRegistrado);
                // var_dump($infoUsuario['password']);
            }
            // var_dump($_SESSION);
        } catch (Exception $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }
        ?>
    </body>
</html>