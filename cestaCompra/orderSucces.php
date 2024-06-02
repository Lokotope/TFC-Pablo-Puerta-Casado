<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}

include("../conexionBBDD/datosConexion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Decorarte - Pedido confirmado</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Pedido confirmado</h1>
    <p>Su pedido se ha registrado correctamente. Su número de pedido es: #<?php echo $_GET['id']; ?></p>
    <button><a href="../usuarios/miUsuario.php">Volver a mi usuario.</a></button>
</div>

<?php

?>
</body>
</html>