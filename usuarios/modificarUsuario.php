<?php
extract($_POST);
session_start();
include ("../conexionBBDD/datosConexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Decorarte - Modificar usuario</title>
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

    <!-- Rueda de carga -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Fin de la rueda de carga -->

    <!-- Inicio barra de navegación -->
<div class="container-fluid fixed-top px-0">
        <div class="container px-0">
            <div class="topbar" style="border:solid; border-radius: 10px; border-color: white;">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="topbar-info d-flex2 flex-wrap">
                            <a href="../contacto.php" class="text-light me-4"><i
                                    class="fas fa-envelope text-white me-2"></i>DecorarteTienda3D@gmail.com</a>
                            <a href="../contacto.php" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>658 50 85
                                20</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="topbar-icon d-flex align-items-center justify-content-end">
                            <a href="https://www.facebook.com/?locale=es_ES" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/?lang=ES&mx=2" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.pinterest.es/" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                            <a href="https://es.linkedin.com/?src=go-pa&trk=sem-ga_campid.18146679037_asid.140850334975_crid.694860685343_kw.linkedin_d.c_tid.kwd-148086543_n.g_mt.e_geo.9048987&mcid=6968657504633266178&cid=&gad_source=1&gclid=CjwKCAjwjeuyBhBuEiwAJ3vuoQekX7ApMSukkWddI7uP0X8sxjQZG-mlPTHXzyGrNaKNBGdQqYVaLBoCWkgQAvD_BwE&gclsrc=aw.ds" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-light bg-light navbar-expand-xl" style="font-weight: bold; border-radius: 10px;">
                <a href="../index.php" class="navbar-brand ms-3 d-flex2">
                    <h1 class="text-primary display-5">Decorarte</h1>
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="../index.php" class="nav-item nav-link">Inicio</a>
                        <a href="../tienda.php" class="nav-item nav-link">Tienda online</a>
                        <a href="../servicioEventos.php" class="nav-item nav-link">Objetos personalizables</a>
                        <a href="../contacto.php" class="nav-item nav-link">Contacto</a>
                        <?php
                            if(isset($_SESSION["Usuario"])){
                                ?>
                                
                                <div class="nav-item dropdown">
                                <a href="miUsuario.php" class="nav-link dropdown-toggle active">Mi usuario</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <a href="miUsuario.php" class="dropdown-item active">Mi perfil</a>
                                        <a href="../usuarios/misPedidos.php" class="dropdown-item">Mis pedidos</a>
                                        <a href="cierreSesion.php" class="dropdown-item">Cerrar sesión</a>
                                    </div>
                                </div>
                                  <button class="btnAdelante btnTienda" style="margin-right: 10px;"><i class="bi bi-cart"><a href="../cestaCompra/viewCart.php">Mi cesta</a></i></button>
                                <?php
                            }else{
                                ?>
                                <a href="events.html" class="nav-item nav-link" hidden>No usuario</a>
                                <a href="zonaUsuarios.php" class="nav-item nav-link" style="padding-right: 50px">Zona de usuarios</a>
                                <?php
                            }
                            ?>
                        </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Fin barra de navegación -->
    
    
       <div class="container-fluid bg-pad2">
        <div class="container-fluid text-center justify-content:center" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-2">Modificar datos de usuario</h3>

            <p class="mb-2 mt-2 boldBlack" style="font-size: 15px">Podrás cambiar cualquier información relevante a tu perfíl <br>
        </div>
    </div>

    <?php
    if (empty($_POST)) {
    
        ?>
        <!-- Panel de usuario -->
        <div class="container-fluid col-md-8 mb-5 bg-white" style="border: solid; border-color: black; border-radius: 10px;">
            <div class="container mt-1 text-center">
                <form action="modificarUsuario.php" method="post" style="margin-top: 5%; display:grid; justify-items: center">
                    <table>
                        <td>
                            <div class="col-12">
                                <tr>
                                    <div class="col-6">
                                        <label for="nuevoNombre" class="me-3">Modificar nombre de usuario</label> <br>
                                        <input type="text" name="nuevoNombre" id="nuevoNombre" class=" mt-2 mb-2 mr-3"
                                            value="<?php echo $_SESSION['Usuario']['user'] ?>" required></input>
                                    </div>
                                </tr>
                            </div>
                            <div class="col-12">
                                <tr>
                                    <div class="col-6">
                                        <label for="nuevoEmail" class="me-3 mt-4">Modificar dirección email</label> <br>
                                        <input type="mail" name="nuevoEmail" id="nuevoEmail" class="mt-2 mb-2"
                                            value="<?php echo $_SESSION['Usuario']['email'] ?>" required></input>
                                    </dvi>
                                </tr>
                            </div>
                            <div class="col-12">
                                <tr>
                                    <div class="col-6">
                                    <label for="nuevoTlfn" class="me-3 mt-4">Modificar teléfono de contacto</label> <br>
                                    <input type="phone" name="nuevoTlfn" id="nuevoTlfn" class="mt-2 mb-2"
                                        value=" <?php echo $_SESSION['Usuario']['tlfnCliente'] ?>" required></input>
                                         </dvi>
                                </tr>
                            </div>
                            <div class="col-12">
                                <tr>     
                                <div class="col-6">
                                    <label for="nuevaDireccion gap-2" class="me-3 mt-4">Modificar dirección de envíos</label> <br>
                                    <input type="text" name="nuevaDireccion" id="nuevaDireccion" class="mt-2 mb-2" value="<?php echo $_SESSION['Usuario']['direccionEnvios'] ?>" required></input>
                                    </div>
                                </tr>
                            </div>
                            <div class="col-12">
                                <tr>
                                    
                                    <input class="btnAdelante btnTienda mb-3 mt-3 mx-5" type="submit" class="mb-2" value="confirmar los cambios"></input>
                                    <button class="btnAdelante btnTienda mb-3 mx-5"><a href="miUsuario.php">Volver sin guardar</a></button>
                                </tr>
                            </div>
                        </td>
                    </table>
                </form>
            </div>
        </div>
        <?php
    } else {
    
    // Obtener datos del formulario
    $userId = $_SESSION['Usuario']['idCliente'];
    $nuevoNombre = $_POST['nuevoNombre'];
    $nuevoEmail = $_POST['nuevoEmail'];
    $nuevoTlfn = $_POST['nuevoTlfn'];
    $nuevaDireccion = $_POST['nuevaDireccion'];
        
    // Consulta preparada para actualizar los datos del usuario
   $sql = 'UPDATE usuarios SET user = :nuevoNombre, email = :nuevoEmail, tlfnCliente = :nuevoTlfn, direccionEnvios = :nuevaDireccion WHERE idCliente = :userId';
    
    $stmt = $conexion->prepare($sql);
    
    // Asignar los valores a los parámetros
    $stmt->bindParam(':nuevoNombre', $nuevoNombre, PDO::PARAM_STR);
    $stmt->bindParam(':nuevoEmail', $nuevoEmail, PDO::PARAM_STR);
    $stmt->bindParam(':nuevoTlfn', $nuevoTlfn, PDO::PARAM_STR);
    $stmt->bindParam(':nuevaDireccion', $nuevaDireccion, PDO::PARAM_STR);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    
    $stmt->execute();
    
   if ($stmt->execute()) {
    echo '<script>
            window.alert("Los datos han sido modificados correctamente, debe volver a iniciar sesión.");
            window.location.href = "cierreSesion.php";
          </script>';
} else {
    echo 'Error al actualizar los datos del usuario.';
}
    }
    ?>

    <!-- Boton para cerrar sesión -->
    <div class="container-fluid d-flex mt-2 justify-content-center">
        
    </div>
    <!-- Fin boton para cerrar sesión-->

    <!-- Fin panel de usuario-->

</body>

</html>
