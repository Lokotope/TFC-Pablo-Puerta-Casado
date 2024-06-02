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
</head>

<body>

    <!-- Inicio Spinner de carga -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Fin Spinner de carga -->

    <?php
    extract($_POST);
    // var_dump($_POST);


    // Comprobar que las contraseñas ingresadas coinciden

    if($_POST['passUserRegistrado'] != $_POST['checkPass']){
       ?>
       <script>
        window.alert("Las contraseñas ingresadas en los campos 'Introduzca una contraseña' y 'Vuelva a introducir la contraseña' deben coincidir.");
        window.location = "nuevoUsuario.php";
       </script>
       <?php
    }else{

    // Conexion a la BBDD
    include("../conexionBBDD/datosConexion.php");

    require_once("../conexionBBDD/datosConexion.php");

    // Encriptacion de la contraseña
    $passEncriptada = password_hash($_POST['passUserRegistrado'], PASSWORD_DEFAULT);

    // Condicional para evitar los espacios en el nombre de usuario
    if (strpos($_POST['nameUserRegistrado'], " ")) {
        echo "<script>window.alert('El nombre de usuario no puede contener espacios en blanco')</script>";
        echo "<script>window.location='nuevoUsuario.php'</script>";
    } else {

        // Consulta PDO para añadir el usuario a la base de datos
        $checkNombre = "SELECT user FROM usuarios WHERE user = :usuario";

        // Preparacion de la consulta
        $resultadoCheckNombre = $conexion->prepare($checkNombre);

        // Bindeo de parametros
        $resultadoCheckNombre->bindParam(':usuario', $_POST['nameUserRegistrado'], PDO::PARAM_STR);

        try {
            $resultadoCheckNombre->execute();

            if ($resultadoCheckNombre->rowCount() > 0) {
                ?>
                <script>
                    window.alert("ERROR! El nombre de usuario ya está registrado.");
                    window.location = "nuevoUsuario.php";
                </script>
                <?php
            } else {
                $consulta = "INSERT INTO usuarios (usuarioRegistrado, user, password, nombreCliente, apellidosCliente, tlfnCliente, direccionEnvios, email) VALUES ('si', :usuario , :pass, :nombre, :apellidos, :tlfn, :direccion, :email)";

                // Preparacion de la consulta
                $resultado = $conexion->prepare($consulta);

                // Bindeo de marcadores
                $resultado->bindParam(':usuario', $_POST['nameUserRegistrado'], PDO::PARAM_STR);
                $resultado->bindParam(':pass', $passEncriptada, PDO::PARAM_STR);
                $resultado->bindParam(':nombre', $_POST['nombreOriginalNewUser'], PDO::PARAM_STR);
                $resultado->bindParam(':apellidos', $_POST['apellidosNewUser'], PDO::PARAM_STR);
                $resultado->bindParam(':tlfn', $_POST['tlfnContacto'], PDO::PARAM_STR);
                $resultado->bindParam(':direccion', $_POST['direccionEnvios'], PDO::PARAM_STR);
                $resultado->bindParam(':email', $_POST['emailUsuario'], PDO::PARAM_STR);

                try {
                    // Ejecucion de la consulta
                    $resultado->execute();

                    ?>
                    <script type="text/javascript">
                        window.alert("GENIAL! El registro se ha completado con éxito!");
                        window.location = "../index.php";
                    </script>
                    <?php

                }catch(PDOException $e){
                    echo "Error en la ejecución de la consulta " . $e->getMessage();
                }

            }
        } catch (PDOException $e) {
            echo "Error en la ejecución de la consulta " . $e->getMessage();
        }
    }
}
    ?>
</body>

</html>