<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("conexion.php");
$host = "localhost";   
$user = "root";        
$pass = "";          
$db   = "formacion_integral";

$conexion = mysqli_connect($host, $user, $pass, $db);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
 echo "Conexión exitosa"; 
?>