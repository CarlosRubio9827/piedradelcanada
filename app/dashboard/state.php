<?php
session_start();
$titulo = "Estado del usuario";
$actual = "state";
require_once("../layout/header.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/guest/auth/login_style.css" type="text/css">
<style type="text/css">
body {
    background: url("../../assets/img/dashboard/state/background.jpg")no-repeat center center;
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
                     
                                <div class="col-12 mb-5 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h3 class="white-text"><i class="fas fa-running mr-2"></i>
                                                <?php echo $user->nombreUsuario." ".$user->apellidosUsuario ;?>
                                            </h3>
                                                <hr class="hr-light">
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                    
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