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


$sql = "INSERT INTO `usuarios` (`nombreUsuario`, `apellidosUsuario`, `distancia`, `valorPagar`, `correoElectronico`, `tipoIdentificacion`, `numeroIdentificacion`, `fechaNacimiento`, `sexo`, `telefono`, `pais`,`departamento`, `ciudad`, `tipoSangre`, `entidadSalud`, `tallaCamisa`,`contactoEmergenciaNombre`, `contactoEmergenciaTelefono`, `estadoIncripcion`, `estadoKit`)VALUES ('$nombre','$apellidos','$distancia','$valorPagar','$correo','$tipoDocumento','$numeroIdentificacion', NULL,'$sexo','$telefono','$pais','$departamento','$ciudad','$tipoSangre','$seguroMedico','$tallaCamisa','$nombreContactoEmergencia','$telefonoContactoEmergencia','$estadoInscripcion','$estadoKit')";

//$sql = "SELECT * FROM ejemplo";
/* if ($conn->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
    printf("Se creó con éxtio la tabla myCity.\n");
} */
//$conn->query($sql) or die (mysqli_error($conn));

//$sql = "SELECT * FROM usuarios";
$resultado = $conn->query($sql) or die (mysqli_error($conn));
/* while($fila=$resultado->fetch_assoc()){
    echo "<tr> ";
        echo "<td>"; echo $fila['idusuarios']; echo "</td>";
        echo "<td>"; echo $fila['nombreUsuario']; echo "</td>";
        echo "<td>"; echo $fila['apellidosUsuario']; echo "</td>";
    echo "</tr> "; 
    

}*/

// Se abre una sesión.
session_start();
 
$_SESSION['usuario'] = "$numeroIdentificacion";
 
header('Location: estadoInscripcion.php');



?>