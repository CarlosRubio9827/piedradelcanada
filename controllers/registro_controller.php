<?php
include "PDO.php";
session_start();

//if(isset($_SESSION)) {
//    echo "has logeado con el usuario temporal ".$_SESSION['usuario'];
//}else{
//    echo "mal";
//}

$usuario = $_SESSION['usuario'];

$sql = "SELECT * FROM usuarios WHERE numeroIdentificacion = '$usuario'";

$resultado = $conn->query($sql) or die (mysqli_error($conn));
 
$fila=$resultado->fetch_assoc();
    
  $estadoInscripcion = $fila['estadoIncripcion'];

  if($estadoInscripcion == 'registrado'){

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Estado de Inscripción</title>
    </head>
    <body style="width:50%;margin:auto;min-width:600px;max-width:1000px"> 
    

		<h4 style="color: #288bc9; text-align: center;">¡<strong>Gracias</strong> por registrarse en Piedra del Canadá: El órigen</h4>

  			<img  style="display:block; margin:auto;" height="150"  width="150" src="http://www.piedradelcanadatr.com/wp-content/uploads/2018/08/PIEDRA-DEL-CANADA-PSD-2018-2-1024x1024.png"/>
			 
            <hr>

            <h3 style="color: #288bc9; text-align: center;">¿Qué paso debo seguir para confirmar mi cupo en <strong> Piedra del Canadá: El órigen?</strong></h3>

            <h4>Terminar su inscripción a Piedra Del Canadá: El órigen es muy fácil, y cuentas con las siguientes opciones:</h4>

             <ul>
                <li>
                    <h4> Tranferencia Bancaria</h4>

                    <ul>

                        <li type="circle">Consigne o transfiera la suma de <strong> <?php echo '$'.number_format($fila['valorPagar']);?>
                        (valor de <?php echo $fila['distancia']; ?>)</strong> a la CUENTA DE AHORROS EJEMPLOBANCO # 000-2323232323, a nombre de Nelso Eduardo Martinez cc 113691790.
                        </li>

                        <li type="circle">
                        Por último envia un correo a <strong>rubiogallegoc@gmail.com</strong> con el comprobante de pago para 
                        confirmar tu transacción y activar tu inscripción.
                        </li>
                    </ul>
                </li>
                <li>
                    <h4> Pago Presencial</h4>
                    Comunicate al número de celular <strong>3157813181</strong> y acuerda un encuentro para terminar tu proceso de inscripción.
                </li>
            </ul>

            <hr>
            
            <h3 style="color: #288bc9; text-align: center;">Datos de Inscripción</h3>

            <div style=" text-align: center;">
                <table  class="table">
                        <thead>
                            
                        </thead>
                        <tbody style="color: #288bc9; text-align: left;">
                            <tr>
                            <th scope="row">Distancia</th>
                            <td><?php echo $fila['distancia']; ?></td>
                            
                            </tr>
                            <tr>
                            <th scope="row">Nombre Completo                  </th>
                            <td><?php echo $fila['nombreUsuario'].$fila['apellidosUsuario']; ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Correo Electrónico</th>
                            <td><?php echo $fila['correoElectronico']; ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Doc. Identidad</th>
                            <td><?php echo $fila['tipoIdentificacion'].$fila['numeroIdentificacion']; ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Número Teléfono</th>
                            <td><?php echo $fila['telefono']; ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Edad</th>
                            <td><?php echo $fila['fechaNacimiento'] . ' Años'; ?></td>
                            </tr>
                            <tr>
                            <th scope="row">Talla Camisa</th>
                            <td><?php echo $fila['tallaCamisa']; ?></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            
            
            <hr>
            


    </body>
    </html>


<?php
    
    }else if($estadoInscripcion == 'completado'){
    


    }
?>
    
 
    
    


