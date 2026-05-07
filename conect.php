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
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['enviar'])){
    // 1. Recibimos datos
    $opinion = $_POST['opinion'];
    $sql = "INSERT INTO parecio (opinion) VALUES ('$opinion')";
    $query = mysqli_query($conexion, $sql);

    if($query){
        echo "¡Éxito! Usuario insertado.";
    } else {
        // ESTA LÍNEA ES CLAVE: Te dirá qué tiene de malo tu base de datos
        echo "Error de SQL: " . mysqli_error($conexion);
    }
} else {
    echo "El formulario no está enviando el nombre 'enviar'.";
}
?>