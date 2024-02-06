<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>FormCiclos.php</title>
</head>
<body>
  <?php
  session_start();
  include("conexion.php");
  ?>
  <form action="addCiclos.php" method="post">
    <table align="center" width="80%">
      <tr>
        <td colspan="2"><h2>Añadir Ciclos</h2></td>
      </tr>
      <tr>
        <td>Ciclo</td>
        <td><input type="text" name="f_ciclo" id="f_ciclo" maxlenght="50"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="ENVIAR">
          <input type="button" value="LISTADO" onclick="window.open('lstCiclos.php', '_parent')">
        </td>
      </tr>
    </table>
  </form>
 
</body>
</html>