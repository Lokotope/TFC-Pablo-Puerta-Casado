<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $todayDate = date("Y-m-d");

    // Crear la cookie con la fecha de hoy y que expira en 12 meses.
    setcookie('cookiesAccepted_CityTasks', $todayDate, time() + (365 * 24 * 60 * 60), "/"); // 1 año

    // Redirigir para evitar reenvío del formulario.
    echo '
    <script>
        window.location.href = "index.php";
    </script>';
    exit();
}

// Verifica si la cookie no está establecida
if (!isset($_COOKIE['cookiesAccepted_CityTasks'])) {
    echo '
     <form method="post" action="" class="alert alert-info d-flex justify-content-center align-items-center" id="formulario" role="alert">
            <p class="mb-0 px-2">Este sitio web utiliza cookies para mejorar la experiencia del usuario. Si continúa utilizando nuestra web, significa que está de acuerdo con nuestra <a href="politicaPrivacidad.php">Política de Privacidad</a>.</p>
            <input type="hidden" name="accept_cookies" value="true">
            <button type="submit" class="btn btnAdelante btnTienda btn-sm ml-3">De Acuerdo</button>
        </form>';
}
?>
