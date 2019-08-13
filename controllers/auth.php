<?php
include "require/pdo.php";
$method = $_POST['method'];
if($method == "logout"){
    session_start(); 
    session_destroy();
    header('Location: ../app/auth/login.php');
}
else if($method == "login"){
    $db = new PDO_Connect;
    $db->connect();
    $email = $_POST['email'];
    $numeroIdentificacion = $_POST['numeroIdentificacion'];
    $usuario = $db->getRow("SELECT * FROM usuarios WHERE numeroIdentificacion = ? AND correoElectronico = ?",array($numeroIdentificacion,$email));
if($usuario){
    session_start();
    $_SESSION['usuario'] = json_encode($usuario);   
    $_SESSION['message'] = "Bienvenido a la piedra del canada.";
    $_SESSION['message_type'] = "success";
    header('Location: ../app/dashboard/state.php');
}else{
    session_start();
    $_SESSION['message'] = "Credenciales incorrectas.";
    $_SESSION['message_type'] = "error";
    header('Location: ../app/auth/login.php');
}
}else if($method == "register"){
    $estadoInscripcion = 'registrado';
    $estadoKit = "Sin entregar";
    $distancia = $_POST['distancia'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $email = $_POST['email'];
    $tipoDocumento = $_POST['tipoIdentificacion'];
    $numeroIdentificacion = $_POST['numeroIdentificacion'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $tipoSangre = $_POST['tipoSangre'];
    $seguroMedico = $_POST['seguroMedico'];
    $tallaCamisa = $_POST['tallaCamisa'];
    $nombreContactoEmergencia = $_POST['nombreContactoEmergencia'];
    $telefonoContactoEmergencia = $_POST['telefonoContactoEmergencia'];
    
    if($distancia == '10K'){
        $valorPagar = 60000;
    }else if($distancia == '21K'){
        $valorPagar = 70000;
    }else{
        $valorPagar = 90000;
    }
    $db = new PDO_Connect;
    $db->connect();
    $res = $db->query("INSERT INTO usuarios (nombreUsuario, apellidosUsuario, distancia, valorPagar, correoElectronico, tipoIdentificacion, numeroIdentificacion, fechaNacimiento, sexo, telefono, pais,departamento, ciudad, tipoSangre, entidadSalud, tallaCamisa,contactoEmergenciaNombre, contactoEmergenciaTelefono, estadoIncripcion, estadoKit) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
    array($nombre,$apellidos,$distancia,$valorPagar,$email,$tipoDocumento,$numeroIdentificacion, NULL,$sexo,$telefono,$pais,$departamento,$ciudad,$tipoSangre,$seguroMedico,$tallaCamisa,$nombreContactoEmergencia,$telefonoContactoEmergencia,$estadoInscripcion,$estadoKit));
    session_start();
    $_SESSION['usuario'] = $usuario;  
    $_SESSION['message'] = "Bienvenido a la piedra del canada.";
    $_SESSION['message_type'] = "success";
    header('Location: ../app/dashboard/state.php');
}
