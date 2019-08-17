<?php
session_start();
$titulo = "Estado de la Inscripción";
$actual = "state";
require_once("../layout/header.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/guest/auth/login_style.css" type="text/css">
<style type="text/css">
body {
    background: url("../../assets/img/dashboard/state/background.jpg")repeat center center fixed;
    background-size: cover;
}
 

</style> 
<?php
require_once("../layout/css.php");
?>
<!--Intro Section-->
<section class="section pt-4">
        <div class="mask pattern-0 flex-center"></div>
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-3">
                     
                                <div class="col-12 mb-5 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h4 class="white-text"><i class="fas fa-running mr-2"></i>
                                                <?php echo "Bienvenido ". $user->nombreUsuario." ".$user->apellidosUsuario ;?>
                                            </h4>
                                                <hr class="hr-light">

                                                <?php

                                                if($user->estadoIncripcion == 'registrado'){
                                                  
                                                    ?>
                                                 <h5 class="white-text">¿Qué paso debo seguir para confirmar mi cupo en <strong> Piedra del Canadá: El órigen?</strong></h5>

                                                <h6 class="white-text">Terminar su inscripción a Piedra Del Canadá: El órigen es muy fácil, y cuentas con las siguientes opciones:</h6>
                                                </div>
                                                <div class="text-left">
                                                <ul>
                                                    <li class="white-text">
                                                        <h6 align="left"><strong>Tranferencia Bancaria</strong></h6>
                                                        <ul>
                                                            <li type="circle">
                                                                <p style="font-size:14px;" align="left">Consigne o transfiera la suma de <strong> <?php echo '$'.number_format($user->valorPagar);?>
                                                            (valor de <?php echo $user->distancia; ?>)</strong> a la CUENTA DE AHORROS EJEMPLOBANCO # 000-2323232323, a nombre de Nelso Eduardo Martinez cc 113691790.</p>
                                                            </li>

                                                            <li type="circle">
                                                                <p  style="font-size:14px;"align="left">Por último envia un correo a <strong>rubiogallegoc@gmail.com</strong> con el comprobante de pago para 
                                                            confirmar tu transacción y activar tu inscripción.</p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="white-text">
                                                        <h6 align="left" > <strong>Pago Presencial</strong></h6>
                                                        <ul>
                                                            <li><p style="font-size:14px;"  align="left">Comunicate al número de celular <strong>3157813181</strong> y acuerda un encuentro para terminar tu proceso de inscripción.</p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                
                                                </div>
                                       
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                    
                                </div>

        

                                                   <!--Datos personales--> 
                                
                                <div class="col-12 mb-5 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h4 class="white-text"><i class="fas fa-user mr-2"></i>
                                                Tus Datos Personales
                                            </h4>
                                                <!--hr class="hr-light"-->
                                                 
                                                <div style=" text-align: center; background-color: rgba(255,255,255,0)!important;">
                                                    <table  class="table table-sm table-hover" >
                                                            <thead>
                                                                
                                                            </thead>
                                                            <tbody style=" text-align: left;background-color: rgba(0,0,0,0.05)!important;">
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Estado Inscripción </strong></th>
                                                                <td><?php echo "Pendiente de Pago"; ?></td>
                                                                
                                                                </tr>    
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Distancia</strong></th>
                                                                <td><?php echo $user->distancia; ?></td>
                                                                
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Nombre Completo</strong></th>
                                                                <td><?php echo $user->nombreUsuario.$user->apellidosUsuario; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Correo Electrónico</strong></th>
                                                                <td><?php echo $user->correoElectronico; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Doc. Identidad</strong></th>
                                                                <td><?php echo $user->tipoIdentificacion.$user->numeroIdentificacion; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Número Teléfono</strong></th>
                                                                <td><?php echo $user->telefono; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Fecha de Nacimiento</strong></th>
                                                                <td><?php echo $user->fechaNacimiento; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Talla Camisa</strong></th>
                                                                <td><?php echo $user->tallaCamisa; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="http://www.piedradelcanadatr.com/" class="btn btn-theme btn-outline-white hoverable waves-light waves-effect"><i class="fas fa-door-closed mr-2"></i>Regresar a la Página Principal</a>

                                                </div>
                                                
                                                </div>
   
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                  
                                </div>

                                <!--Fin datos Persoanles-->
                                <?php
                                                }else if($user->estadoIncripcion == 'pago'){

                                                    ?>

                                <div class="col-12 mb-5 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h3 class="white-text"><i class="fas fa-user mr-2"></i>
                                                ¡Felicidades, estás inscrito en la Piedra Del Canadá: El órigen!
                                            </h3>
                                                <hr class="hr-light">
                                                 
                                                <h3 class="white-text">Pronto te daremos más información acerca de la carrera</strong></h3>

                                              
                                                </div>
   
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                    
                                </div>

                                <div class="col-12 mb-5 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h4 class="white-text"><i class="fas fa-user mr-2"></i>
                                                Tus Datos Personales
                                            </h4>
                                                <!--hr class="hr-light"-->
                                                 
                                                <div style=" text-align: center; background-color: rgba(255,255,255,0)!important;">
                                                    <table  class="table table-sm table-hover" >
                                                            <thead>
                                                                
                                                            </thead>
                                                            <tbody style=" text-align: left;background-color: rgba(0,0,0,0.05)!important;">
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Estado Inscripción </strong></th>
                                                                <td><?php echo "Pendiente de Pago"; ?></td>
                                                                
                                                                </tr>    
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Distancia</strong></th>
                                                                <td><?php echo $user->distancia; ?></td>
                                                                
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Nombre Completo</strong></th>
                                                                <td><?php echo $user->nombreUsuario.$user->apellidosUsuario; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Correo Electrónico</strong></th>
                                                                <td><?php echo $user->correoElectronico; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Doc. Identidad</strong></th>
                                                                <td><?php echo $user->tipoIdentificacion.$user->numeroIdentificacion; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Número Teléfono</strong></th>
                                                                <td><?php echo $user->telefono; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Fecha de Nacimiento</strong></th>
                                                                <td><?php echo $user->fechaNacimiento; ?></td>
                                                                </tr>
                                                                <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Talla Camisa</strong></th>
                                                                <td><?php echo $user->tallaCamisa; ?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="http://www.piedradelcanadatr.com/" class="btn btn-theme btn-outline-white hoverable waves-light waves-effect"><i class="fas fa-door-closed mr-2"></i>Regresar a la Página Principal</a>

                                                </div>
                                                
                                                </div>
   
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                 </div>
                                                    <?php
                                                    
                                                }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
require_once("../layout/js.php");
?>
<script type="text/javascript" src="../../assets/js/addons/validation/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/messages_es.js"></script>
<script type="text/javascript">

function validar(){
  if($("#login_form").validate({
    lang: 'es',
    errorPlacement: function(error, element){
      $(element).parent().after(error);
		}})){
    $("#login_form").submit();
  }
  }

</script>
<?php
require_once("../layout/footer.php");
?>