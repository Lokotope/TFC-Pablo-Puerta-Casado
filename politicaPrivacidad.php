<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Decorarte - política de cookies</title>
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
                                    class="fas fa-envelope text-white me-2"></i>DecorarteTienda3D@gmail.com</a>
                            <a href="contacto.php" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>658 50 85
                                20</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="topbar-icon d-flex align-items-center justify-content-end">
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                            <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
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


    <!-- Inicio más sobre decorarte -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row g-5 justify-content-center">
                <div class="col-xl-7">
                    <h1 class="mb-4 bienvenidaTienda pt-5 text-white">Nuestras políticas de privacidad, cookies y condiciones de venta</h1>
                    <h1 class="mb-4 text-center">Políticas de privacidad, cookies y condiciones de venta</h1>
                    <p class="fs-5 textoBienvenida text-center">Aquí podrás encontrar toda la información acerca de las
                        distintas políticas de seguridad y tratado de datos de Decorarte</p>

                    <ul class="d-flex nav" style="margin-bottom: 20px;">
                        <li class="caja">
                            <a class="d-flex py-2 text-center" data-bs-toggle="pill" href="#tab-1">
                                <span class="textoCuadro" style="width: 180px;">Política de Cookies</span>
                            </a>
                        </li>
                        <li class="caja">
                            <a class="d-flex py-2 mx-3 text-center" data-bs-toggle="pill" href="#tab-2">
                                <span class="textoCuadro" style="width: 180px;">Política de privacidad</span>
                            </a>
                        </li>
                        <li class="caja">
                            <a class="d-flex py-2 text-center" data-bs-toggle="pill" href="#tab-3">
                                <span class="textoCuadro" style="width: 180px;">Políticas de Venta</span>
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
                                                <h1 class="mb-4 text-center">Política de cookies</h1>
                                                <h3 class="mb-4 text-center">www.decorarte.com</h3>
                                                <p class="mb-4 text-center">El acceso a este Sitio Web puede implicar la
                                                    utilización de cookies. Las cookies son
                                                    pequeñas cantidades de información que se almacenan en el navegador
                                                    utilizado por cada Usuario
                                                    —en los distintos dispositivos que pueda utilizar para navegar— para
                                                    que el servidor recuerde
                                                    cierta información que posteriormente y únicamente el servidor que
                                                    la implementó leerá. Las
                                                    cookies facilitan la navegación, la hacen más amigable, y no dañan
                                                    el dispositivo de navegación.

                                                    Las cookies son procedimientos automáticos de recogida de
                                                    información relativa a las
                                                    preferencias determinadas por el Usuario durante su visita al Sitio
                                                    Web con el fin de
                                                    reconocerlo como Usuario, y personalizar su experiencia y el uso del
                                                    Sitio Web, y pueden
                                                    también, por ejemplo, ayudar a identificar y resolver errores.

                                                    La información recabada a través de las cookies puede incluir la
                                                    fecha y hora de visitas al
                                                    Sitio Web, las páginas visionadas, el tiempo que ha estado en el
                                                    Sitio Web y los sitios
                                                    visitados justo antes y después del mismo. Sin embargo, ninguna
                                                    cookie permite que esta misma
                                                    pueda contactarse con el número de teléfono del Usuario o con
                                                    cualquier otro medio de contacto
                                                    personal. Ninguna cookie puede extraer información del disco duro
                                                    del Usuario o robar
                                                    información personal. La única manera de que la información privada
                                                    del Usuario forme parte del
                                                    archivo Cookie es que el usuario dé personalmente esa información al
                                                    servidor.

                                                    Las cookies que permiten identificar a una persona se consideran
                                                    datos personales. Por tanto, a
                                                    las mismas les será de aplicación la Política de Privacidad
                                                    anteriormente descrita. En este
                                                    sentido, para la utilización de las mismas será necesario el
                                                    consentimiento del Usuario. Este
                                                    consentimiento será comunicado, en base a una elección auténtica,
                                                    ofrecido mediante una decisión
                                                    afirmativa y positiva, antes del tratamiento inicial, removible y
                                                    documentado.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center">Cookies propias</h3>
                                                <p class="mb-4 text-center text-center">Son aquellas cookies que son
                                                    enviadas al ordenador o dispositivo del Usuario y gestionadas
                                                    exclusivamente por Decorarte 3D para el mejor funcionamiento del
                                                    Sitio Web. La información que se recaba se emplea para mejorar la
                                                    calidad del Sitio Web y su Contenido y su experiencia como Usuario.
                                                    Estas cookies permiten reconocer al Usuario como visitante
                                                    recurrente del Sitio Web y adaptar el contenido para ofrecerle
                                                    contenidos que se ajusten a sus preferencias.</p>
                                                <h3 class="text-dark boldBlack text-center">Deshabilitar, rechazar y
                                                    eliminar cookies</h3>
                                                <p class="mb-4 text-center">El Usuario puede deshabilitar, rechazar y
                                                    eliminar las cookies —total o parcialmente— instaladas en su
                                                    dispositivo mediante la configuración de su navegador (entre los que
                                                    se encuentran, por ejemplo, Chrome, Firefox, Safari, Explorer). En
                                                    este sentido, los procedimientos para rechazar y eliminar las
                                                    cookies pueden diferir de un navegador de Internet a otro. En
                                                    consecuencia, el Usuario debe acudir a las instrucciones facilitadas
                                                    por el propio navegador de Internet que esté utilizando. En el
                                                    supuesto de que rechace el uso de cookies —total o parcialmente—
                                                    podrá seguir usando el Sitio Web, si bien podrá tener limitada la
                                                    utilización de algunas de las prestaciones del mismo.</p>
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
                                                <h1 class="mb-4 text-center">Política de privacidad del sitio web</h1>
                                                <h3 class="text-dark boldBlack text-center">www.decorarte.com</h3>
                                                <h3 class="text-dark boldBlack text-center pt-4">I. POLÍTICA DE PRIVACIDAD Y PROTECCIÓN DE DATOS</h3>
                                                <p class="mb-4">Respetando lo establecido en la legislación vigente, 
                                                    Decorarte 3D (en adelante, también Sitio Web) se compromete a adoptar las medidas técnicas y organizativas necesarias, según el nivel de seguridad adecuado al riesgo de los datos recogidos.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Leyes que incorpora esta política de privacidad</h3>
                                                <p class="mb-4"> Esta política de privacidad está adaptada a la normativa española y europea vigente en materia de protección de datos personales en internet. En concreto, la misma respeta las siguientes normas:
                                                El Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos (RGPD).
                                                La Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPD-GDD).
                                                El Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal (RDLOPD).
                                                La Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE).
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Registro de Datos de Carácter Personal</h3>
                                                <p class="mb-4"> En cumplimiento de lo establecido en el RGPD y la LOPD-GDD, le informamos que los datos personales recabados por Decorarte 3D, 
                                                mediante los formularios extendidos en sus páginas quedarán incorporados y serán tratados en nuestro fichero con el fin de poder facilitar, agilizar y cumplir los compromisos establecidos entre Decorarte 3D y el Usuario o el mantenimiento de la relación que se establezca en los formularios que este rellene, o para atender una solicitud o consulta del mismo. Asimismo, de conformidad con lo previsto en el RGPD y la LOPD-GDD, salvo que sea de aplicación la excepción prevista en el artículo 30.5 del RGPD, se mantiene un registro de actividades de tratamiento que especifica, según sus finalidades,
                                                las actividades de tratamiento llevadas a cabo y las demás circunstancias establecidas en el RGPD.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Principios aplicables al tratamiento de los datos personales</h3>
                                                <p class="mb-4"> El tratamiento de los datos personales del Usuario se someterá a los siguientes principios recogidos en el artículo 5 del RGPD y en el artículo 4 y siguientes de la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales:
                                                Principio de licitud, lealtad y transparencia: se requerirá en todo momento el consentimiento del Usuario previa información completamente transparente de los fines para los cuales se recogen los datos personales.
                                                Principio de limitación de la finalidad: los datos personales serán recogidos con fines determinados, explícitos y legítimos.
                                                Principio de minimización de datos: los datos personales recogidos serán únicamente los estrictamente necesarios en relación con los fines para los que son tratados.
                                                Principio de exactitud: los datos personales deben ser exactos y estar siempre actualizados.
                                                Principio de limitación del plazo de conservación: los datos personales solo serán mantenidos de forma que se permita la identificación del Usuario durante el tiempo necesario para los fines de su tratamiento.
                                                Principio de integridad y confidencialidad: los datos personales serán tratados de manera que se garantice su seguridad y confidencialidad.
                                                Principio de responsabilidad proactiva: el Responsable del tratamiento será responsable de asegurar que los principios anteriores se cumplen.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Categorías de datos personales</h3>
                                                <p class="mb-4">Las categorías de datos que se tratan en Decorarte 3D son únicamente datos identificativos. En ningún caso, se tratan categorías especiales de datos personales en el sentido del artículo 9 del RGPD.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Base legal para el tratamiento de los datos personales</h3>
                                                <p class="mb-4">La base legal para el tratamiento de los datos personales es el consentimiento. Decorarte 3D se compromete a recabar el consentimiento expreso y verificable del Usuario para el tratamiento de sus datos personales para uno o varios fines específicos.
                                                El Usuario tendrá derecho a retirar su consentimiento en cualquier momento. Será tan fácil retirar el consentimiento como darlo. Como regla general, la retirada del consentimiento no condicionará el uso del Sitio Web.
                                                En las ocasiones en las que el Usuario deba o pueda facilitar sus datos a través de formularios para realizar consultas, solicitar información o por motivos relacionados con el contenido del Sitio Web, se le informará en caso de que la cumplimentación de alguno de ellos sea obligatoria debido a que los mismos sean imprescindibles para el correcto desarrollo de la operación realizada.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Fines del tratamiento a que se destinan los datos personales</h3>
                                                <p class="mb-4">Los datos personales son recabados y gestionados por Decorarte 3D con la finalidad de poder facilitar, agilizar y cumplir los compromisos establecidos entre el Sitio Web y el Usuario o el mantenimiento de la relación que se establezca en los formularios que este último rellene o para atender una solicitud o consulta.
                                                Igualmente, los datos podrán ser utilizados con una finalidad comercial de personalización, operativa y estadística, y actividades propias del objeto social de Decorarte 3D, así como para la extracción, almacenamiento de datos y estudios de marketing para adecuar el Contenido ofertado al Usuario, así como mejorar la calidad, funcionamiento y navegación por el Sitio Web.
                                                En el momento en que se obtengan los datos personales, se informará al Usuario acerca del fin o fines específicos del tratamiento a que se destinarán los datos personales; es decir, del uso o usos que se dará a la información recopilada.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Períodos de retención de los datos personales</h3>
                                                <p class="mb-4">Los datos personales solo serán retenidos durante el tiempo mínimo necesario para los fines de su tratamiento y, en todo caso, únicamente durante el siguiente plazo: 12 meses, o hasta que el Usuario solicite su supresión.
                                                En el momento en que se obtengan los datos personales, se informará al Usuario acerca del plazo durante el cual se conservarán los datos personales o, cuando eso no sea posible, los criterios utilizados para determinar este plazo.
                                                En el momento en que se obtengan los datos personales, se informará al Usuario acerca del fin o fines específicos del tratamiento a que se destinarán los datos personales; es decir, del uso o usos que se dará a la información recopilada.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Destinatarios de los datos personales</h3>
                                                <p class="mb-4">Los datos personales del Usuario no serán compartidos con terceros.
                                                En cualquier caso, en el momento en que se obtengan los datos personales, se informará al Usuario acerca de los destinatarios o las categorías de destinatarios de los datos personales.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Datos personales de menores de edad</h3>
                                                <p class="mb-4">Respetando lo establecido en los artículos 8 del RGPD y 7 de la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales, solo los mayores de 14 años podrán otorgar su consentimiento para el tratamiento de sus datos personales de forma lícita por Decorarte 3D. Si se trata de un menor de 14 años, será necesario el consentimiento de los padres o tutores para el tratamiento, y este solo se considerará lícito en la medida en la que los mismos lo hayan autorizado.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Secreto y seguridad de los datos personales</h3>
                                                <p class="mb-4">Decorarte 3D se compromete a adoptar las medidas técnicas y organizativas necesarias, según el nivel de seguridad adecuado al riesgo de los datos recogidos, de forma que se garantice la seguridad de los datos de carácter personal y se evite la destrucción, pérdida o alteración accidental o ilícita de datos personales transmitidos, conservados o tratados de otra forma, o la comunicación o acceso no autorizados a dichos datos.
                                                El Sitio Web cuenta con un certificado SSL (Secure Socket Layer), que asegura que los datos personales se transmiten de forma segura y confidencial, al ser la transmisión de los datos entre el servidor y el Usuario, y en retroalimentación, totalmente cifrada o encriptada.
                                                Sin embargo, debido a que Decorarte 3D no puede garantizar la inexpugnabilidad de internet ni la ausencia total de hackers u otros que accedan de modo fraudulento a los datos personales, el Responsable del tratamiento se compromete a comunicar al Usuario sin dilación indebida cuando ocurra una violación de la seguridad de los datos personales que sea probable que entrañe un alto riesgo para los derechos y libertades de las personas físicas. Siguiendo lo establecido en el artículo 4 del RGPD, se entiende por violación de la seguridad de los datos personales toda violación de la seguridad que ocasione la destrucción, pérdida o alteración accidental o ilícita de datos personales transmitidos, conservados o tratados de otra forma, o la comunicación o acceso no autorizados a dichos datos.
                                                Los datos personales serán tratados como confidenciales por el Responsable del tratamiento, quien se compromete a informar de y a garantizar por medio de una obligación legal o contractual que dicha confidencialidad sea respetada por sus empleados, asociados, y toda persona a la cual le haga accesible la información.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Derechos derivados del tratamiento de los datos personales</h3>
                                                <p class="mb-4">El Usuario tiene sobre Decorarte 3D y podrá, por tanto, ejercer frente al Responsable del tratamiento los siguientes derechos reconocidos en el RGPD y la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales:
                                                Derecho de acceso: Es el derecho del Usuario a obtener confirmación de si Decorarte 3D está tratando o no sus datos personales y, en caso afirmativo, obtener información sobre sus datos concretos de carácter personal y del tratamiento que Decorarte 3D haya realizado o realice, así como, entre otra, de la información disponible sobre el origen de dichos datos y los destinatarios de las comunicaciones realizadas o previstas de los mismos.
                                                Derecho de rectificación: Es el derecho del Usuario a que se modifiquen sus datos personales que resulten ser inexactos o, teniendo en cuenta los fines del tratamiento, incompletos.
                                                Derecho de supresión ("el derecho al olvido"): Es el derecho del Usuario, siempre que la legislación vigente no establezca lo contrario, a obtener la supresión de sus datos personales cuando estos ya no sean necesarios para los fines para los cuales fueron recogidos o tratados; el Usuario haya retirado su consentimiento al tratamiento y este no cuente con otra base legal; el Usuario se oponga al tratamiento y no exista otro motivo legítimo para continuar con el mismo; los datos personales hayan sido tratados ilícitamente; los datos personales deban suprimirse en cumplimiento de una obligación legal; o los datos personales hayan sido obtenidos producto de una oferta directa de servicios de la sociedad de la información a un menor de 14 años. Además de suprimir los datos, el Responsable del tratamiento, teniendo en cuenta la tecnología disponible y el coste de su aplicación, deberá adoptar medidas razonables para informar a los responsables que estén tratando los datos personales de la solicitud del interesado de supresión de cualquier enlace a esos datos personales.
                                                Derecho a la limitación del tratamiento: Es el derecho del Usuario a limitar el tratamiento de sus datos personales. El Usuario tiene derecho a obtener la limitación del tratamiento cuando impugne la exactitud de sus datos personales; el tratamiento sea ilícito; el Responsable del tratamiento ya no necesite los datos personales, pero el Usuario lo necesite para hacer reclamaciones; y cuando el Usuario se haya opuesto al tratamiento.
                                                Derecho a la portabilidad de los datos: En caso de que el tratamiento se efectúe por medios automatizados, el Usuario tendrá derecho a recibir del Responsable del tratamiento sus datos personales en un formato estructurado, de uso común y lectura mecánica, y a transmitirlos a otro responsable del tratamiento. Siempre que sea técnicamente posible, el Responsable del tratamiento transmitirá directamente los datos a ese otro responsable.
                                                Derecho de oposición: Es el derecho del Usuario a que no se lleve a cabo el tratamiento de sus datos de carácter personal o se cese el tratamiento de los mismos por parte de Decorarte 3D.
                                                Derecho a no ser objeto de una decisión basada únicamente en el tratamiento automatizado, incluida la elaboración de perfiles: Es el derecho del Usuario a no ser objeto de una decisión individualizada basada únicamente en el tratamiento automatizado de sus datos personales, incluida la elaboración de perfiles, existente salvo que la legislación vigente establezca lo contrario.
                                                Así pues, el Usuario podrá ejercitar sus derechos mediante comunicación escrita dirigida al Responsable del tratamiento con la referencia "RGPD-www.decorarte.com", especificando:
                                                Nombre, apellidos del Usuario y copia del DNI. En los casos en que se admita la representación, será también necesaria la identificación por el mismo medio de la persona que representa al Usuario, así como el documento acreditativo de la representación. La fotocopia del DNI podrá ser sustituida, por cualquier otro medio válido en derecho que acredite la identidad.
                                                Petición con los motivos específicos de la solicitud o información a la que se quiere acceder.
                                                Domicilio a efecto de notificaciones.
                                                Fecha y firma del solicitante.
                                                Todo documento que acredite la petición que formula.
                                                Esta solicitud y todo otro documento adjunto podrá enviarse a la siguiente dirección y/o correo electrónico:
                                                Dirección postal: C/ Cáceres n23 1b
                                                Correo electrónico: pablopuertacasado@gmail.com
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Enlaces a sitios web de terceros</h3>
                                                <p class="mb-4">El Sitio Web puede incluir hipervínculos o enlaces que permiten acceder a páginas web de terceros distintos de Decorarte 3D, y que por tanto no son operados por Decorarte 3D. Los titulares de dichos sitios web dispondrán de sus propias políticas de protección de datos, siendo ellos mismos, en cada caso, responsables de sus propios ficheros y de sus propias prácticas de privacidad.
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Reclamaciones ante la autoridad de control</h3>
                                                <p class="mb-4">En caso de que el Usuario considere que existe un problema o infracción de la normativa vigente en la forma en la que se están tratando sus datos personales, tendrá derecho a la tutela judicial efectiva y a presentar una reclamación ante una autoridad de control, en particular, en el Estado en el que tenga su residencia habitual, lugar de trabajo o lugar de la supuesta infracción. En el caso de España, la autoridad de control es la Agencia Española de Protección de Datos (https://www.aepd.es/).
                                                </p>
                                                <h3 class="text-dark boldBlack text-center pt-4">II. ACEPTACIÓN Y CAMBIOS EN ESTA POLÍTICA DE PRIVACIDAD</h3>
                                                <p class="mb-4">Es necesario que el Usuario haya leído y esté conforme con las condiciones sobre la protección de datos de carácter personal contenidas en esta Política de Privacidad, así como que acepte el tratamiento de sus datos personales para que el Responsable del tratamiento pueda proceder al mismo en la forma, durante los plazos y para las finalidades indicadas. El uso del Sitio Web implicará la aceptación de la Política de Privacidad del mismo.
                                                Decorarte 3D se reserva el derecho a modificar su Política de Privacidad, de acuerdo a su propio criterio, o motivado por un cambio legislativo, jurisprudencial o doctrinal de la Agencia Española de Protección de Datos. Los cambios o actualizaciones de esta Política de Privacidad no serán notificados de forma explícita al Usuario. Se recomienda al Usuario consultar esta página de forma periódica para estar al tanto de los últimos cambios o actualizaciones.
                                                Esta Política de Privacidad fue actualizada para adaptarse al Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos (RGPD) y a la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales.
                                                </p>
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
                                                <h1 class="mb-4 text-center">Política de Venta, Pago y Devoluciones</h1>
                                                <h3 class="text-dark boldBlack text-center">www.decorarte.com</h3>
                                                <h3 class="text-dark boldBlack text-center pt-4">POLITICA DE VENTA</h3>
                                                <p class="mb-4">Todos los productos de esta tienda han sido elaborados por Decorarte 3D con domicilio social C/Cáceres nº23, Aranjuez Madrid.

                                                    Todos nuestros productos siguen estrictos controles de calidad, así como los procesos y nuestros proveedores. Por favor, póngase en contacto con nosotros en caso de tener algún problema con el producto.</p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Pagos</h3>
                                                <p class="mb-4">La gestión del pago se realiza en servidores seguros.

                                                Métodos de pago aceptados:
                                                
                                                - PayPal, tanto mediante modelo con cuenta de usuario como mediante tarjeta de débito/crédito a través de su plataforma de pago.

                                                – Ingreso/Transferencia bancaria (sólo disponible para empresas y pedidos por encargo)

                                                El pago por transferencia tiene un plazo de 5 días después de haber realizado el pedido. Una vez pasado ese tiempo, los pedidos pendientes de pago estarán sujetos a cancelación. No realizaremos el envío hasta haber confirmado el pago.</p>
                                                <h3 class="text-dark boldBlack text-center pt-4">Envíos</h3>
                                                <p class="mb-4">Todos los artículos son enviados desde Madrid, España. Los tiempos de envío pueden ser superiores a los habituales (ver tiempos de envío) si el pedido se hace durante el fin de semana, para evitar que el producto se quede en los almacenes de la empresa distribuidora durante mas de 24h.

                                                    TIEMPOS DE ENVÍO
                                                    Garantizamos que cada pedido es enviado por mensajería urgente para ser entregado en un plazo aproximado de 19 horas desde la fecha de la compra (a excepción del pago por transferencia). No podemos garantizar que la mensajería no tenga incidencias.

                                                    Las entregas normales se realizan de 8,30 hasta las 19:00hs de la tarde del día seleccionado. No se puede seleccionar hora de entrega.

                                                    No se hacen envíos a Canarias, Islas Baleares, Ceuta y Melilla (pero estamos trabajando en ello!).
                                                    
                                                    El envío gratuito a partir de 40€ es únicamente para envíos dentro de la Península.</p>
                                                     <h3 class="text-dark boldBlack text-center pt-4">Packaging</h3>
                                                     <p class="mb-4">Cada pedido será enviado en una caja preparada para su perfecto transporte. Si el bulto llega en malas condiciones, no lo aceptes. Si llega en buenas condiciones y el producto está con algún daño háznoslo saber a info@chocolatesbenayas.com en un plazo inferior a 24hs después de la entrega y adjuntando fotografías de los daños.</p>
                                                     <h3 class="text-dark boldBlack text-center pt-4">Devoluciones</h3>
                                                     <p class="mb-4">Por favor, si tienes algún problema con la compra ponte en contacto con nosotros lo antes posible. Si no estás satisfecho con tu compra, ponte en contacto con nosotros antes de dejar un voto negativo, intentaremos encontrar una solución.

                                                        Por razones sanitarias no se pueden aceptar devoluciones de productos alimentarios, no obstante, si tienes algún problema ponte en contacto con nosotros lo antes posible.</p>
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

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-body py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Newsletter</h4>
                        <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-0 bg-secondary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn-hover-bg btn btn-primary position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Our Services</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Ocean Turtle</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> White Tiger</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Social Ecology</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Loneliness</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Beauty of Life</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Present for You</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
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
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site
                            Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-2"><i
                                class="fab fa-pinterest"></i></a>
                        <a href="#" class="btn-hover-color btn-square text-white me-0"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


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