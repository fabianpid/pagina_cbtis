 <?php
// Usamos getenv() que es el método más seguro en Railway
$host = getenv('MYSQLHOST');
$port = getenv('MYSQLPORT');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQLDATABASE');

$con = mysqli_connect($host, $user, $pass, $db, $port);

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>