<?php
/* include de sesion start */
include "./assets/sesion.php";
/* caba el include de sesion start */
require "./../src/conexion.php";
require "./../src/jugador.php";
  $j=new usuario();
  $j->conectar();
  $lista=$j->listarUsuarios();
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/algo.css">
    <title></title>
  </head>
  <body>

    <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="registro.php">Registro</a>
      <a href="listadoUsuarios.php">Usuarios</a>
    </div>

    <table id="listado">
       <tr>
         <td class="arriba">Nombre</td>
         <td class="arriba">Apellidos</td>
         <td class="arriba">Edad</td>
         <td class="arriba">Curso</td>
         <td class="arriba">Puntuacion</td>
       </tr>
       <?php
       foreach ($lista as $jugador) {
         echo "<tr>";
         echo "<td class=abajo>".$jugador{'nombre'}."</td>";
         echo "<td class=abajo>".$jugador{'apellidos'}."</td>";
         echo "<td class=abajo>".$jugador{'edad'}."</td>";
         echo "<td class=abajo>".$jugador{'curso'}."</td>";
         echo "<td class=abajo>".$jugador{'puntuacion'}."</td>";
         echo "</tr>";
       }
       ?>
       </table>
       <br>
       <!-- Footer-->
       <?php include "./assets/footer.php"; ?>
  </body>
</html>
