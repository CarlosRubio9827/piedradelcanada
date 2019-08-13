<div class="mask pattern-6 flex-center"></div>
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
                                                <h3 class="white-text"><i class="fas fa-running mr-2"></i>
                                                <?php echo "Bienvenido ". $user->nombreUsuario." ".$user->apellidosUsuario ;?>
                                            </h3>
                                                <hr class="hr-light">

                                                <?php

                                                if($user->estadoIncripcion == 'registrado'){
                                                  
                                                    ?>
                                                 <h3 class="white-text">¿Qué paso debo seguir para confirmar mi cupo en <strong> Piedra del Canadá: El órigen?</strong></h3>

                                                <h4 class="white-text">Terminar su inscripción a Piedra Del Canadá: El órigen es muy fácil, y cuentas con las siguientes opciones:</h4>
                                                </div>
                                                <div class="text-left">
                                                <ul>
                                                    <li class="white-text">
                                                        <h4 align="left"><strong>Tranferencia Bancaria</strong></h4>
                                                        <ul>
                                                            <li type="circle">
                                                                <h6 align="left">Consigne o transfiera la suma de <strong> <?php echo '$'.number_format($user->valorPagar);?>
                                                            (valor de <?php echo $user->distancia; ?>)</strong> a la CUENTA DE AHORROS EJEMPLOBANCO # 000-2323232323, a nombre de Nelso Eduardo Martinez cc 113691790.</h6>
                                                            </li>

                                                            <li type="circle">
                                                                <h6 align="left">Por último envia un correo a <strong>rubiogallegoc@gmail.com</strong> con el comprobante de pago para 
                                                            confirmar tu transacción y activar tu inscripción.</h6>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="white-text">
                                                        <h4 align="left" > <strong>Pago Presencial</strong></h4>
                                                        <ul>
                                                            <li><h6  align="left">Comunicate al número de celular <strong>3157813181</strong> y acuerda un encuentro para terminar tu proceso de inscripción.</h6>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                
                                                </div>
                                                    

                                                <?php
                                                }else if($user->estadoIncripcion = "completado"){
                                                    echo "registrado";
                                                }

                                                ?>

      

                                            
                                            
                                           
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                    
                                </div>
                                <!--Datos personales--> 
                                
                                

                                <!--Fin datos Persoanles-->

                            </div>
                        </div>
                    </div>
                </div>