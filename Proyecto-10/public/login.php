<?php
/* inicio sesion */
session_start();
/* conexion */
require "./../src/Conexion.php";
require "./../src/jugador.php";
  $j=new usuario();
  $j->conectar();
  $lista=$j->listarUsuarios();
  ?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/log.css">
  </head>
  <body>

    <div id="log">
    <!-- caja inicio sesion -->
    <p id="us">Usuario</p>
    <form class="" action="login.php" method="post">
      <select name="user">
      <?php
        foreach ($lista as $usuario) {
          echo "<option value=$usuario[id]>".$usuario['nombre']."</option>";
        }
          $_SESSION['usuario'] = $_POST['user'];
      ?>
      </select>
    <input type="submit" value="ENVIAR">
    </form>
    <!-- fin caja inicio sesion -->

    <?php
    if(isset($_SESSION["usuario"])){
      header("Location: http://localhost/Programacion/comenzandojs/Proyecto-10/public/index.php");
    }


    ?>
</div>

        <canvas id="js-particles" class="particles" width="1280" height="1280">
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
          <script  src="js/backLogin.js"></script>
  </body>
</html>
