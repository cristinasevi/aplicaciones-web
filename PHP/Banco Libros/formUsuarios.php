<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>FormUsuarios.php</title>
</head>
<body>
  <?php
  session_start();
  include("conexion.php");
  ?>
  <form action="addUsuarios.php" method="post">
    <table align="center" width="80%">
      <tr>
        <td colspan="2"><h2>Añadir Usuario</h2></td>
      </tr>
      <tr>
        <td>Usuario</td>
        <td><input type="text" name="f_idUsuario" id="f_idUsuario" maxlenght="9"></td>
      </tr>
      <tr>
        <td>Nombre Completo</td>
        <td><input type="text" name="f_nombrecompleto" id="f_nombrecompleto" maxlenght="40"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="f_email" id="f_email" maxlenght="60"></td>
      </tr>
      <tr>
        <td>Móvil</td>
        <td><input type="tel" name="f_movil" id="f_movil"></td>
      </tr>
      <tr>
        <td>Clave</td>
        <td><input type="text" name="f_clave" id="f_clave" maxlenght="16"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="ENVIAR">
          <a href="inicio.php">Volver</a>
        </td>
      </tr>
    </table>
  </form>
 
</body>
</html>