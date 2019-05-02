<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: http://localhost/Programacion/comenzandojs/Proyecto-10/public/login.php");
}
?>
