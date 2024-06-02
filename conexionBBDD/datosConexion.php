<?php
$host = "localhost"; // dirección del servidor de BD
$db_user = "id22235750_pablo"; 	// usuario para acceder al servidor de BD
$db_pass = "PabloLokotope1995!"; // password para acceder al servidor de BD
$db = "id22235750_usuarios"; // nombre de la base de datos

try{
$conexion = new PDO("mysql:host=$host;dbname=$db", $db_user, $db_pass);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET utf8");
}catch(PDOException $e){
    echo "Error de conexión a la base de datos.";
    die("El intento de conexión a la base de datos a fracasado." . $e->getMessage());
}
?>