<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Decorarte - Servicios para eventos</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

       
    </head>

    <body>

        <!-- Inicio rueda de carga -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Fin rueda de carga -->


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
                        <a href="servicioEventos.php" class="nav-item nav-link active">Objetos personalizables</a>
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

        <!-- Inicio cabecera -->
        <div class="container-fluid bg-imagen">
            <div class="container text-center" style="max-width: 900px;">
                <h1 class="mb-4 bienvenidaTienda">Servicios para eventos</h1>
                <p class="mb-0 boldBlack">Inicia sesión o registra un nuevo usuario para disfrutar de ventajas como seguimiento de pedidos, sistema de puntos y acceso al foro una vez se implemente en la web.</p> 
            </div>
        </div>
        <!-- Fin cabecera -->

        <!-- Services Start -->
        <div class="container-fluid service py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">What we do</h5>
                    <h1 class="mb-0">What we do to protect environment</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-1.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Raising money to help</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-2.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0"> close work with services</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-3.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Pro Guided tours only</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="img/service-4.jpg" class="img-fluid w-100" alt="Image">
                            <div class="service-link">
                                <a href="#" class="h4 mb-0">Protecting animal area</a>
                            </div>
                        </div>
                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


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
                        <h4 class="mb-4 text-white">Volunteer</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Karen Dawson</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Jack Simmons</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Michael Linden</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Simon Green</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Natalie Channing</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Caroline Gerwig</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Our Gallery</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-1.jpg" data-lightbox="footerGallery-1"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-2.jpg" data-lightbox="footerGallery-2"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-3.jpg" data-lightbox="footerGallery-3"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-4.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-4.jpg" data-lightbox="footerGallery-4"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-5.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-5.jpg" data-lightbox="footerGallery-5"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-gallery">
                                    <img src="img/gallery-footer-6.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/gallery-footer-6.jpg" data-lightbox="footerGallery-6"
                                            class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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