<?php
include 'conexion.php';

$estadoInscripcion = 'registrado';
$estadoKit = "Sin entregar";
$distancia = $_POST['distancia'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$correo = $_POST['correo'];
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

$valorPagar;

if($distancia == '10K'){
    $valorPagar = 60000;
}else if($distancia == '21K'){
    $valorPagar = 70000;
}else{
    $valorPagar = 90000;
}


//$sql = "INSERT INTO `usuarios` (`nombreUsuario`, `apellidosUsuario`, `distancia`, `valorPagar`, `correoElectronico`, `tipoIdentificacion`, `numeroIdentificacion`, `fechaNacimiento`, `sexo`, `telefono`, `pais`,`departamento`, `ciudad`, `tipoSangre`, `entidadSalud`, `tallaCamisa`,`contactoEmergenciaNombre`, `contactoEmergenciaTelefono`, `estadoIncripcion`, `estadoKit`)VALUES ('$nombre','$apellidos','$distancia','$valorPagar','$correo','$tipoDocumento','$numeroIdentificacion','$fechaNacimiento','$sexo','$telefono','$pais','$departamento','$ciudad','$tipoSangre','$seguroMedico','$tallaCamisa','$nombreContactoEmergencia','$telefonoContactoEmergencia','$estadoInscripcion','$estadoKit')";
$sql = "INSERT INTO ejemplo values ('carlos')";
$conn->query($sql) or die ("Fallo en la hjhjhjhj");


?>