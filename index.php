<?php
 session_start();
 if($_SESSION['usuario']){
    header("Location:app/dashboard/state.php");
 }else{
    header("Location:app/auth/login.php");
 }
?>