<?php
session_start();
require_once("cookies.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Decorarte - Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librerias -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Estilo personalizado de bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo -->
    <link href="css/style.css" rel="stylesheet">


    <!-- Estilo banner cookies -->
    <style>
        #formulario {
            display: <?php echo $window ? 'none' : 'flex'; ?>;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            border-top: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            align-items: center;
            z-index: 1000;
        }
        #cerrar-btn {
            background: none;
            border: none;
            font-size: 16px;
            cursor: pointer;
            margin-left: auto;
        }
        #aceptar-btn {
            margin-left: 20px;
        }
        .mensaje {
            flex-grow: 1;
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
                            <a href="contacto.php" class="text-light me-4"><i
                                    class="fas fa-envelope text-white me-2"></i>DecorarteTienda3D@gmail.com</a>
                            <a href="contacto.php" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>658 50 85
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
                <img src="img/logoPosiblePrincipal.png" class="logoPrincipal" alt="image">
                <a href="index.php" class="navbar-brand ms-3 d-flex2">
                    <h1 class="text-primary display-5">Decorarte</h1>
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="tienda.php" class="nav-item nav-link">Tienda online</a>
                        <a href="servicioEventos.php" class="nav-item nav-link">Objetos personalizables</a>
                        <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                        <?php
                            if(isset($_SESSION["Usuario"])){
                                ?>
                                
                                <div class="nav-item dropdown">
                                <a href="../usuarios/miUsuario.php" class="nav-link dropdown-toggle">Mi usuario</a>
                                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                        <a href="usuarios/miUsuario.php" class="dropdown-item">Mi perfil</a>
                                        <a href="gallery.html" class="dropdown-item">Mis pedidos</a>
                                        <a href="usuarios/cierreSesion.php" class="dropdown-item">Cerrar sesión</a>
                                    </div>
                                </div>
                                <button class="btnAdelante btnTienda" style="margin-right: 10px;"><i class="bi bi-cart"><a href="../cestaCompra/viewCart.php">Mi cesta</a></i></button>
                                <?php
                            }else{
                                ?>
                                <a href="events.html" class="nav-item nav-link" hidden>No usuario</a>
                                <a href="usuarios/zonaUsuarios.php" class="nav-item nav-link" style="padding-right: 50px">Zona de usuarios</a>
                                <?php
                            }
                            ?>
                        </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Fin barra de navegación -->


    <!-- Inicio Carrousel Cabecera-->
    <div class="container-fluid navCabecera">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/fondo3D.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="textoPreCabecera" style="letter-spacing: 3px;">Tienda de productos e impresiones 3D
                            </h4>
                            <h1 class="textoCabecera">IMPRESIONES 3D EN P.L.A</h1>
                            <p class="mb-5 fs-5">Artículos de regalo, decoración y útiles.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/tienda/llaveros3d.jpeg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="textoCabecera" style="letter-spacing: 3px;">Eventos y personalizaciones</h4>
                            <p class="mb-5 fs-5">Personaliza tus regalos, organiza packs para eventos originales y
                                personalizados.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/pla/pla.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">
                                Comprometidos con el medio ambiente</h4>
                            <h1 class="textoCabecera">Utilizamos materiales biodegradables</h1>
                            <p class="mb-5 fs-5">El PLA que empleamos para la fabricación de nuestros objetos no se
                                extrae mediante procesos químicos o nocivos para el medio ambiente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- Fin Carrousel Cabecera-->

    <!-- Inicio más sobre decorarte -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5">
                    <div class="imagenLogo">
                        <img src="img/logo.png" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7">
                    <h5 class="text-uppercase text-primary text-center">Bienvenid@</h5>
                    <h1 class="mb-4 text-center">¿Qué es Decorarte?</h1>
                    <p class="fs-5 textoBienvenida text-center">Decorarte es una página de venta de productos impresos
                        en 3D, útiles y decorativos, producidos de manera controlada y respetuosa con el medio ambiente.
                        Estos son los servicios que ofrecemos:</p>

                    <ul class="d-flex nav" style="margin-bottom: 20px;">
                        <li class="caja">
                            <a class="d-flex py-2 text-center" data-bs-toggle="pill" href="#tab-1">
                                <span class="textoCuadro" style="width: 180px;">Tienda 3D</span>
                            </a>
                        </li>
                        <li class="caja">
                            <a class="d-flex py-2 mx-3 text-center" data-bs-toggle="pill" href="#tab-2">
                                <span class="textoCuadro" style="width: 180px;">Servicios para eventos</span>
                            </a>
                        </li>
                        <li class="caja">
                            <a class="d-flex py-2 text-center" data-bs-toggle="pill" href="#tab-3">
                                <span class="textoCuadro" style="width: 180px;">Personalizaciones</span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-class bg-secondary p-4">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-center my-auto">
                                                <h5 class="text-uppercase mb-3">Conoce nuestra tienda Online</h5>
                                                <p class="mb-4">Productos de decoración para tu hogar, útiles para tu día a día, figuras y detalles para regalo.Todo esto y mucho más lo encontrarás en nuestra tienda Online. <br> !No dudes en visitarla¡ 
                                                </p>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a class="btnAdelante btnTienda" href="tienda.php">Ir a la tienda Online</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-center my-auto">
                                                <h5 class="text-uppercase mb-3">Organiza un evento y decora o regala con Decorarte.
                                                </h5>
                                                <p class="mb-4">¿Celebras un cumpleños, un bautizo o comunión, o cualquier otro tipo de evento social? <br> Disponemos de packs de regalo para todo tipo de eventos.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a class="btnAdelante btnTienda" href="servicioEventos.php">Servicios para eventos</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-center my-auto">
                                                <h5 class="text-uppercase mb-3">Personaliza cualquier regalo, hazlo
                                                    único</h5>
                                                <p class="mb-4">Puedes personalizar muchos de nuestros diseños para dar ese toque especial y único a tu regalo o capricho.  <br> Pincha en el botón que encontrarás más abajo para poder ver todos nuestros diseños personalizables.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a class="btnAdelante btnTienda" href="#">Ver diseños personalizables</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fin más sobre decorarte -->

    <!-- Inicio pie de página -->
    <div class="container-fluid footer bg-dark text-body py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex2 flex-column">
                            <h4 class="mb-4 text-white">Nuestros servicios</h4>
                            <a href="tienda.php"><i class="fas fa-angle-right me-2"></i> Tienda Online</a>
                            <a href="servicioEventos.php"><i class="fas fa-angle-right me-2"></i> Servicios para eventos</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Personalizaciones</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex2 flex-column">
                        <h4 class="mb-4 text-white">Políticas de Decorarte 3D</h4>
                        <a href="politicaPrivacidad.php"><i class="fas fa-angle-right me-2"></i> Políticas de privacidad, cookies y venta.</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Fin pie de página -->


    <!-- Inicio Copyright -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Dercorarte 3D</a>, Todos los derechos reservados.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Copyright -->

    <!-- Botón para volver al inicio de la página -->
    <a href="#" class="btnAdelante btnTienda back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- Librerias JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Plantilla Javascript -->
    <script src="js/main.js"></script>

</body>

</html>