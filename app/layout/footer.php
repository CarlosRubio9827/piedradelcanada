<?php

if(@$_SESSION['message']){
?>
<script type="text/javascript">
$(document).ready(function(){
  var type = "<?php echo $_SESSION['message_type'];?>";
  var message = "<?php echo $_SESSION['message'];?>";
   swal({
  //position: 'top-end',
  type: type,
  title: message,
  showConfirmButton: false,
  toast: true,
  animation: false,
  customClass: 'animated shake',
  timer: 3000
}) 
});
</script>
<?php
$_SESSION['message_type'] = NULL;
$_SESSION['message'] = NULL;
}
?>
<script type="text/javascript">
function salir(){
    swal({
  title: 'Salir',
  text: '¿Desea cerrar la sesion"?',
  type: 'question',
  confirmButtonText: '<i class="fas fa-check"></i> Si',
  cancelButtonText: '<i class="fas fa-times"></i> No',
  showCancelButton: true,
  showCloseButton: true,
  confirmButtonClass: 'btn btn-success',
  cancelButtonClass: 'btn btn-danger',
  buttonsStyling: false,
  animation: false,
  customClass: 'animated zoomIn',
}).then((result) => {
  if (result.value) {
    $("#logout-form").submit();
  }
})
}
</script>
</body>
</html>
