<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>FormModulos.php</title>
</head>
<body>
  <?php
  session_start();
  include("conexion.php");
  ?>
  <form action="addModulos.php" method="post">
    <table align="center" width="80%">
      <tr>
        <td colspan="2"><h2>Añadir Módulos</h2></td>
      </tr>
      <tr>
        <td>Modulo</td>
        <td><input type="text" name="f_modulo" id="f_modulo" maxlenght="50"></td>
      </tr>
      <tr>
        <td>Ciclo</td>
        <td>
        <select name="f_idciclo" id="f_idciclo" required>
            <option value="">
            <?php
            $sql="SELECT * FROM ciclos "; 
            $registros=mysqli_query($conexion,$sql); 
            while($linea=mysqli_fetch_array($registros)) 
            {
              echo "<option value='$linea[idCiclo]'>$linea[ciclo]"; 
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="ENVIAR">
          <input type="button" value="LISTADO" onclick="window.open('lstModulos.php', '_parent')">
        </td>
      </tr>
    </table>
  </form>
 
</body>
</html>