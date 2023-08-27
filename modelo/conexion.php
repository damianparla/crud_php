<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conexion";
$port = 3308;

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Establecer el juego de caracteres UTF-8
$conexion->set_charset("utf8");
?>