<?php
include "conexion.php";
session_start();

if(isset($_SESSION)) {
    echo "has logeado con el usuario temporal ".$_SESSION['usuario'];
}else{
    echo "mal";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estado de Inscripción</title>
</head>
<body>
    
</body>
</html>