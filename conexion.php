<?php
$servername = "localhost";
$database = "piedradelcanada";
$username = "root";
$password = "root";
// Se crea conexión
$conn = new mysqli ($servername, $username, $password, $database);
 // Check connection
if (!$conn) {
    die("Conexión Fallida, por favor comunicate con el administrador: " . mysqli_connect_error());
}
echo "Conexión mela";
mysqli_close($conn);
?>