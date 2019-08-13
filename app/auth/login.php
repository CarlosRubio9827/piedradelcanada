<?php
session_start();
$titulo = "Consulta tu estado";
$actual = "login";
require_once("../layout/header.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/guest/auth/login_style.css" type="text/css">
<style type="text/css">
body {
    background: url("../../assets/img/guest/login/background.jpg")no-repeat center center;
    background-size: cover;
}

</style>
<?php
require_once("../layout/css.php");
?>
<!--Intro Section-->
<section class="view intro-2">
        <div class="mask pattern-6 flex-center"></div>
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-3">
                     
                                <div class="col-md-6 mb-5">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h3 class="white-text"><i class="fas fa-user-check mr-2"></i>Consulta tu estado</h3>
                                                <hr class="hr-light">
                                            </div>
                                            <form id="login_form" method="POST" action="../../controllers/auth.php">
                                            <input type="hidden" required value="login" name="method">
                                            <div class="md-form">
                                                <i class="far fa-envelope prefix white-text"></i>
                                                <input id="email" type="email" class="form-control validate white-text" name="email" required autofocus maxlength="100">
                                                <label for="email" data-error="Error" data-success="Correcto">Email <span class="obligatorio">*</span></label>
                                            </div>
                             

                                            <div class="md-form">
                                                <i class="fas fa-id-card prefix white-text"></i>
                                                <input id="numeroIdentificacion" type="number" class="form-control validate white-text" name="numeroIdentificacion" required>
                                                <label for="numeroIdentificacion" data-error="Error" data-success="Correcto">Número identificación <span class="obligatorio">*</span></label>
                                            </div>
                     
                                            <div class="text-center mt-4">
                                                <a onclick="validar()" class="btn btn-outline-white hoverable waves-light" role="button">
                                                    <i class="fas fa-door-closed mr-2"></i>Consulta tu estado</a>
                                                    <!--a class="btn waves-light white-text" role="button">
                                                    <i class="fas fa-key mr-2"></i>¿Olvido la contraseña?</a-->
                                            </div>
                                
                                            </form>
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                    
                                </div>
                                           <div class="center-div-link text-center text-md-left  col-md-6 col-xl-5 offset-xl-1">
                                                <!--div class="text-center">
                                                        <h3 class="white-text"><i class="fas fa-users mr-2"></i>Usuarios</h3>
                                                        <hr class="hr-light">
                                                    </div-->
                                            
                                   <div class="white-text">
                                        <h1 class="h1-responsive font-weight-bold">¡Regístrate ahora! </h1>
                                        <hr class="hr-light">
                                        <h6 class="text-intro">¿Aún no tienes cuenta?, regístrate en simples pasos y empieza a disfrutar de los servicios ofrecidos por IRAPP.</h6>
                                        <br>
                                        <a href="registro.php" class="btn btn-outline-white"><i class="fas fa-user-plus mr-2"></i>Registrarse</a>
                                    </div>
                                </div>

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