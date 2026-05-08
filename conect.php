<?php

$host = getenv('MYSQLHOST') ?: "localhost";
$port = getenv('MYSQLPORT') ?: "3306";
$user = getenv('MYSQLUSER') ?: "root";
$pass = getenv('MYSQLPASSWORD') ?: "";
$db   = getenv('MYSQLDATABASE') ?: "railway";

$conexion = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Esto es vital para los acentos
mysqli_set_charset($conexion, "utf8");
?>
