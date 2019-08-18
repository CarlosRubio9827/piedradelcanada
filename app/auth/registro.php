<?php
session_start();
$titulo = "Registrarme";
$actual = "registro";
require_once("../layout/header.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/select2.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/bootstrap-material-datetimepicker.css" type="text/css"/>

<style type="text/css">
body {
    background: url("../../assets/img/guest/register/background.jpg")repeat center center fixed;
    background-size: cover;
}

.card{ 
    background-color: rgba(0, 0, 0, 0.5) !important;
}
input,.md-form > small,.select2-selection__rendered{
    color:  white !important;
    }
</style>
<?php
require_once("../layout/css.php");
?>
<main>
<section class="view intro-2">
        <div class="mask pattern-0 flex-center"></div>
<!-- Main Container -->
<div class="container mt-5 pt-3">
   
    <div class="row">
        <!-- Content -->
        <div class="col-md-6 mb-5">

          

           <!-- Products Grid -->
           <section class="section pt-4" >

                <!-- Grid row -->
                <div class="row">
                        <div class="col-12">
                        <div class="card z-depth-5 hoverable">
                            <div class="card-body">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="white-text"><i class="fas fa-user-plus mr-2"></i>Registrarse</h3>
                                    <hr class="hr-light">
                                </div>
                                
                                <form id="register_form" method="POST" action="../../controllers/auth.php" accept-charset="UTF-8">
                                  
                                <input type="hidden" required value="register" name="method">

                                <h6 class="white-text">Los campos marcados con (<span class="obligatorio">*</span>) son obligatorios</h6>
                                      
                                <div class="form-row">
                                    <!-- Grid row -->
                                    <div class="col-md-12">
                                        <!-- Material input -->
                                        <div class="md-form">
                                        <i class="fas fa-flag-checkered white-text"></i>
                                        <small for="distancia">Distancia que desea correr <span class="obligatorio">*</span></small>   
                                        <select class="form-control" required id="distancia" name="distancia">
                                        <option value="" disabled selected>Selecciona una opción</option>
                                        <option value="10K">10K - 50.000$</option>
                                            <option value="21K">21K - 50.000$</option>
                                            <option value="30K">30K - 50.000$</option>
                                        </select>
                                        </div>
                                
                                    <!-- Grid column -->
                                    </div>
                                </div>
                         

                                <div class="form-row">
                                <div class="col-1">
                                <i class="fas fa-id-card prefix-select white-text"></i>

                                </div>
                                        <div class="col-md-5 col-11">
                                            <!-- Material input -->
                                            <div class="md-form">
                                            <select required id="tipoIdentificacion" name="tipoIdentificacion">
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                                <option value="Cédula de Ciudadania">Cédula de Ciudadania</option>
                                                <option value="Pasaporte">Pasaporte</option>
                                            </select>
                                            </div>
                                    
                                        <!-- Grid column -->
                                        </div>

                                        <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                    <input type="number" required id="numeroIdentificacion" value="" name="numeroIdentificacion" class="form-control validate">
                                                    <label for="numeroIdentificacion" data-error="Error" data-success="Correcto">Número identificación <span class="obligatorio">*</span></label>
                                                </div>

                                        </div>

                                    </div>
                                        <!-- Grid row -->
                                              
                                 <!-- Grid row -->
                                 <div class="form-row">
                                            <!-- Grid column -->
                                            <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                    <i class="fas fa-running prefix white-text"></i>
                                                    <input type="text" required id="nombre" value="" name="nombre" class="form-control validate">
                                                    <label for="nombre" data-error="Error" data-success="Correcto">Nombre(s) <span class="obligatorio">*</span></label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->
                                    
                                             <!-- Grid column -->
                                        <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                <input type="text" required id="apellido" value="" name="apellido" class="form-control validate">
                                                <label for="apellido" data-error="Error" data-success="Correcto">Apellidos <span class="obligatorio">*</span></label>
                                                </div> 
                                        </div>
                                            <!-- Grid column -->
                                          
                                    </div>

                                    <!-- Grid row -->
                                    <div class="form-row">
                                          
                                    <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                        <i class="far fa-envelope prefix white-text"></i>
                                        <input type="email" required id="email" value="" name="email" class="form-control validate" maxlength="100">
                                        <label for="email" data-error="Error" data-success="Correcto">Email <span class="obligatorio">*</span></label>
                                        </div> 
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                         <input type="email" required id="confirmarEmail" value="" name="confirmarEmail" class="form-control validate" maxlength="100">
                                        <label for="confirmarEmail" data-error="Error" data-success="Correcto">Confirmar email <span class="obligatorio">*</span></label>
                                        </div> 
                                            </div>
                                          
                                    </div>
                                <!-- Grid row -->
                                        
                              
                                        <!-- Grid row -->
                                    <div class="form-row">
                                              
                                        <div class="col-md-6">
                                            <div class="md-form">
                                                <i class="prefix far fa-calendar-check white-text"></i>
                                                <input required type="text" id="fechaNacimiento" value="" name="fechaNacimiento" class="form-control validate" maxlength="50">
                                                <label for="fechaNacimiento" data-error="Error" data-success="Correcto">Fecha de nacimiento <span class="obligatorio">*</span></label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form">
                                            <select class="form-control" required id="sexo" name="sexo">
                                            <option value="" disabled selected></option>
                                            <option value="femenino">Femenino</option>
                                                <option value="masculino">Masculino</option>
                                            </select>
                                            </div>
                                    
                                        <!-- Grid column -->
                                        </div>

                                    </div>
                                    
                                    <div class="form-row">
                                            <!-- Grid column -->
                                            <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                     <input type="number" required id="telefono" value="" name="telefono" class="form-control validate">
                                                    <label for="telefono" data-error="Error" data-success="Correcto">Teléfono <span class="obligatorio">*</span></label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->
                                    
                                             <!-- Grid column -->
                                        <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                <input type="text" required id="pais" value="" name="pais" class="form-control validate">
                                                <label for="pais" data-error="Error" data-success="Correcto">Pais <span class="obligatorio">*</span></label>
                                                </div> 
                                        </div>
                                            <!-- Grid column -->
                                          
                                    </div>

                                    <div class="form-row">
                                            <!-- Grid column -->
                                            <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                     <input type="text" required id="departamento" value="" name="departamento" class="form-control validate">
                                                    <label for="departamento" data-error="Error" data-success="Correcto">Departamento <span class="obligatorio">*</span></label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->
                                    
                                             <!-- Grid column -->
                                        <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                <input type="text" required id="ciudad" value="" name="ciudad" class="form-control validate">
                                                <label for="ciudad" data-error="Error" data-success="Correcto">Ciudad <span class="obligatorio">*</span></label>
                                                </div> 
                                        </div>
                                            <!-- Grid column -->
                                          
                                    </div>

                                    <div class="form-row">    

                                    <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form">
                                            <select class="form-control" required id="tipoSangre" name="tipoSangre">
                                                <option value="" disabled selected></option>
                                                    <option value="A-">A-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="AB+">AB+</option>
                                            </select>
                                            </div>
                                    
                                         </div>

                                         <div class="col-md-6">
                                                <!-- Material input -->
                                                <div class="md-form">
                                                <input type="text" required id="seguroMedico" value="" name="seguroMedico" class="form-control validate">
                                                <label for="seguroMedico" data-error="Error" data-success="Correcto">EPS afiliado<span class="obligatorio">*</span></label>
                                                </div> 
                                        </div>

                                        </div>

                                        <div class="form-row">    

                                            <div class="col-md-12">
                                                    <!-- Material input -->
                                                    <div class="md-form">
                                                    <select class="form-control" required id="tallaCamisa" name="tallaCamisa">
                                                        <option value="" disabled selected></option>
                                                            <option value="xs">XS</option>
                                                            <option value="s">S</option>
                                                            <option value="m">M</option>
                                                            <option value="l">L</option>
                                                            <option value="xl">XL</option>
                                                    </select>
                                                    </div>

                                            </div>

                                        </div>

                                        <div class="text-center">
                                           <center> <h5 class="white-text" style="max-width:300px;">En caso de emergencia nos comunicaremos con</h5></center>
                                            <hr class="hr-light">
                                        </div>
                                        
                                        <div class="form-row">    

                                            <div class="col-md-6">
                                            <div class="md-form">
                                                <input type="text"   id="nombreContactoEmergencia" value="" name="nombreContactoEmergencia" class="form-control  ">
                                                <label for="nombreContactoEmergencia" data-error="Error" data-success="Correcto">Nombre contacto </span></label>
                                                </div>    

                                            </div>

                                            <div class="col-md-6">
                                            <div class="md-form">
                                                <input type="number"   id="numeroContactoEmergencia" value="" name="numeroContactoEmergencia" class="form-control">
                                                <label for="numeroContactoEmergencia" data-error="Error" data-success="Correcto">Número contacto</label>
                                                </div>   

                                            </div>
                                        </div>
                                        
                                        

 


                                                <!-- Grid row -->
                                        <div class="form-row">
                                                <!-- Grid column -->
                                                <div class="col-md-12">
                                            <blockquote class="blockquote bq-primary">
  <p class="bq-title">Términos y Condiciones de participación carrera atlética y declaración de exoneración de responsabilidades y autorización.</p>
  <p class="white-text txt-condiciones" style="text-align: justify;">Con el diligenciamiento, firma de la presente declaración de aceptación, presencia en el evento y porte del número de competencia entiendo y acepto los términos y condiciones de participación en la carrera, aquí descritos, acepto las condiciones de inscripción y declaro que reconozco que este evento es una actividad potencialmente peligrosa y me acojo a su reglamento de participación.

Declaro que en forma libre y voluntaria he decidido participar en la carrera, que estoy en perfectas condiciones físicas y de salud, así como adecuadamente entrenado y preparado para participar en la misma y que estoy afiliado al régimen de salud, prestado por la EPS indicada al pie de mi firma. Aceptare cualquier decisión de la organización de la carrera sobre mi participación y entiendo que la inscripción a la carrera me da el derecho a participar en la competencia, bajo ninguna circunstancia en cualquier evento en que NO pueda participar en la carrera o reclamar el kit de competencia, en las fechas establecidas por la organización, no podré ni reclamar el kit de competencia, ni exigir el reembolso del valor de la inscripción.

Asumo todos los riesgos asociados con mi participación en esta carrera incluyendo pero no limitado a lesiones, caídas y demás accidentes, enfermedades generales, enfermedades de tipo cardiaco entre otras razones por el contacto con otros participantes, las condiciones del clima incluyendo temperatura, lluvias y humedad, tránsito vehicular, condiciones del recorrido, y en general todo riesgo, que declaro conocidos y valorados por mí, así mismo declaro que conozco la ruta y la información general y particular de la carrera.

Habiendo leído esta declaración, conociendo estos hechos y considerando que los acepto por el hecho de participar en la carrera, yo, en mi nombre y en el de cualquier persona que actúe en mi representación libero y eximo a los organizadores de la Carrera, aliados, patrocinadores y sus representantes y sucesores de todo reclamo o responsabilidad de cualquier tipo que surja de mi participación en este evento, incluso en circunstancias de caso fortuito o fuerza mayor, en razón a que la actividad durante el desarrollo de la carrera se encontrara bajo mi control y ejecución exclusiva como participante, así mismo de cualquier responsabilidad por cualquier extravió, robo y/o hurto que pudiere sufrir.
Declaro igualmente que acepto que los organizadores se reservan el derecho de cancelar o aplazar el evento por cualquier circunstancia.
Autorizo a los organizadores, aliados y patrocinadores al uso de fotografías, películas,videos, grabaciones y cualquier otro medio de registro de este evento para cualquier uso legítimo sin compensación económica alguna.
Adicionalmente, autorizo libre y voluntariamente el tratamiento de cualquier dato personal que suministre en desarrollo del evento por cualquier medio así como su incorporación en las bases de datos de los organizadores de la carrera, aliados y Términos y condiciones para la participación en una carrera patrocinadores cuya finalidad sea en el envío de información referente a la Carrera, envío de promociones y publicidad de cualquiera de los aquí mencionados mediante mensajes SMS a celulares, e-mails a las cuentas de correo electrónico registradas y contacto telefónico a los números de teléfono suministrados, sin costo alguno para mí.
Así mismo faculto a los organizadores para enviar o transferir mis datos a cualquiera de las compañías que controlen o que actúen como sus controlantes o como controlantes de ellas o que estén bajo control común con alguna de ellas, además de sus aliados comerciales y estratégicos, dentro y fuera del territorio nacional, para que realicen los usos aquí autorizados; pudiendo en todo caso ejercer en cualquier momento las acciones a que tengo derecho para la protección de mis datos personales conforme lo establecido en la Ley 1581 de 2012 y en el Decreto 1377 de 2013.
Entiendo y acepto que para el día de la competencia es obligatorio portar el número de competencia. Acepto los términos y condiciones establecidos en el presente documento, los cuales he entendido y aceptado voluntariamente.
  </p>
</blockquote>
<div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="terminoCondiciones" name="terminoCondiciones">
                <label class="custom-control-label white-text" for="terminoCondiciones">Acepto los terminos y condiciones.</label>
              </div>
 </div>
                            </div>
                                            <!-- Grid row --> 
                                    
                         

                                        <a onclick="validar()" class="btn btn-theme btn-outline-white hoverable waves-light mt-5 role="button">
                                            <i class="fas fa-user-plus mr-2"></i>Registrarse</a>
                                    </form>
                            </div>
                                </div>
            </div>
        </div>
            <!--Grid row-->
       
            </section>
            <!-- /.Products Grid -->
        </div>
        <!-- /.Content -->

        <div class="mt-5  text-center text-md-left  col-md-6 col-xl-5 offset-xl-1">
         
            <div class="card mb-4 z-depth-5 hoverable mt-5">
                <div class="card-body">
                  
                <div class="white-text">
                <h1 class="h1-responsive font-weight-bold">¡Consulta tu Estado! </h1>
                <hr class="hr-light">
                <h6>¿Ya estás registrado?, inicia sesion y verifica el estado de tu inscripción.</h6>
                <br>
                <a href="login.php" class="btn btn-outline-white btn-theme"><i class="fas fa-door-closed mr-2"></i>Consulta tu Estado</a>
            </div>
        </div>
    </div>
        </div>
    </div>
    </div>
<!-- /.Main Container -->
</section>
</main>
<?php
require_once("../layout/js.php");
?>
<script type="text/javascript" src="../../assets/js/addons/select2.min.js"></script>
<script type="text/javascript" src="../../assets/js/addons/i18n/es.js"></script>
<script type="text/javascript" src="../../assets/js/addons/bootstrap-material-datetimepicker.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/messages_es.js"></script>
<script type="text/javascript">

$('#tipoIdentificacion').select2({
        placeholder: "Tipo de identificación *",
        theme: "material",
        language: "es"
    });
    
    $('#distancia').select2({
        placeholder: "Distancia que desea correr *",
        theme: "material",
        language: "es"
    });

    $('#sexo').select2({
        placeholder: "Sexo *",
        theme: "material",
        language: "es"
    });

    $('#tipoSangre').select2({
        placeholder: "Tipo de sangre *",
        theme: "material",
        language: "es"
    });

    $('#tallaCamisa').select2({
        placeholder: "Talla de camisa *",
        theme: "material",
        language: "es"
    });

    $(".select2-selection__arrow")
        .addClass("fas fa-chevron-down white-text");

$('#fechaNacimiento').bootstrapMaterialDatePicker({

// enable date picker
date : true, 

// enable time picker
time : false, 

// custom date format
format : 'YYYY-MM-DD', 

// min / max date
minDate : null, 
maxDate : null, 

// current date
currentDate : null, 

// Localization
lang : 'es', 

// week starts at
weekStart : 1, 

// short time format
shortTime : false, 

// text for cancel button
'cancelText' : '<i class="fas fa-times fa-2x"></i>', 

// text for ok button
'okText' : '<i class="fas fa-check fa-2x"></i>' 

});
 
function validar(){
  if($("#register_form").validate({
    lang: 'es',
    errorPlacement: function(error, element){
      $(element).parent().after(error);
		}})){        
    var email = $("#email").val();
    var confirmarEmail = $("#confirmarEmail").val();
    if(email == confirmarEmail){
if($("#terminoCondiciones").prop("checked") == true){
   var valor =  $("#numeroIdentificacion").val();
    $.ajax({
  url: "../../controllers/auth.php",
  method: "POST",
  data: { method: "check_nuip", nuip:valor},
}).done(function(response) {
    //console.log(response);
    var data = JSON.parse(response);
    if(data.status == 200){
    if(!data.existe){
        $("#register_form").submit();
    }else{
        swal({
  //position: 'top-end',
  type: 'warning',
  title: 'El número de identificación ya ha sido registrado.',
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
    }
    }else{
        swal({
  //position: 'top-end',
  type: 'error',
  title: data.existe,
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
    }
    
}).fail(function( jqXHR, textStatus ) {
    swal({
  //position: 'top-end',
  type: 'error',
  title: textStatus,
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
});
}else{
    swal({
  //position: 'top-end',
  type: 'warning',
  title: 'Acepte los terminos',
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
}
}else{
    swal({
  //position: 'top-end',
  type: 'warning',
  title: 'Los correos no coinciden',
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
})
  }

  }
  }

</script>
<?php
require_once("../layout/footer.php");
?>