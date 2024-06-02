<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Decorarte - Contacto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
      <style>
        html body{
            background-color: #E3AF69;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Inicio barra de navegación -->
<div class="container-fluid fixed-top px-0">
        <div class="container px-0">
            <div class="topbar" style="border:solid; border-radius: 10px; border-color: white;">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <div class="topbar-info d-flex2 flex-wrap">
                            <a href="contacto.php" class="text-light me-4"><i
                                    class="fas fa-envelope text-white me-2"></i>pablopuertacasado@gmail.com</a>
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
                <a href="index.php" class="navbar-brand ms-3 d-flex2">
                    <h1 class="text-primary display-5">Decorarte</h1>
                </a>
                <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link">Inicio</a>
                        <a href="tienda.php" class="nav-item nav-link">Tienda online</a>
                        <a href="servicioEventos.php" class="nav-item nav-link">Objetos personalizables</a>
                        <a href="contacto.php" class="nav-item nav-link active">Contacto</a>
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
    
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="container text-center py-3" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4" style="margin-top: 15%">Contacta con Decorarte</h1>
                <p class="fs-5 text-dark mb-4 boldBlack">Si tienes alguna sugerencia, queja o simple curiosidad puedes ponerte en contacto con nosotros a traves del siguiente formulario 
                </p>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
<div class="container-fluid bg-light py-2">
    <div class="container py-5">
        <div class="contact p-5">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-lg-5">
                    <h1 class="mb-4 text-center">Formulario de contacto</h1>
                    <p class="mb-4">A través del siguiente formulario podrás ponerte en contacto con nosotros para cualquier duda o reclamación.</p>
                    <form action="https://formsubmit.co/a5e5e657d57f6cd18a5bea7a98467a4c" method="POST">
                        <div class="row gx-4 gy-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" name="nombreClienteContacto" placeholder="Nombre">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0 py-3 px-4" name="mailClienteContacto" placeholder="Email">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" name="tlfnClienteContacto" placeholder="Teléfono de contacto">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0 py-3 px-4" name="motivosClienteContacto" placeholder="Motivos de contacto">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0 py-3 px-4" rows="7" cols="10" name="expMotivosClienteContacto" placeholder="Explica tus motivos"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btnTienda btnAdelante mb-3 mt-3 w-100" type="submit">Enviar formulario</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row g-2">
                        <div class="col-12 col-md-4">
                            <div class="bg-white p-4 text-center">
                                <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                <h4>Dirección</h4>
                                <p class="mb-0">Calle Cáceres nº23</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="bg-white p-4 text-center">
                                <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                <h4>Email de contacto</h4>
                                <p class="mb-0">DecorarteTienda3D@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="bg-white p-4 text-center">
                                <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                <h4>Teléfono</h4>
                                <p class="mb-0">658 508 520</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3053.8547990515563!2d-3.594331824490695!3d40.056341177495945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42057085b9c1cb%3A0x85ce6c6dae1bec2f!2sC.%20C%C3%A1ceres%2C%2028300%2C%20Madrid!5e0!3m2!1ses!2ses!4v1716837145985!5m2!1ses!2ses" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

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


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>