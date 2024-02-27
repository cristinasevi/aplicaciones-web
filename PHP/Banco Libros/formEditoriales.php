<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>FormEditoriales.php</title>
</head>
<body>
  <?php
  session_start();
  include("conexion.php");
  ?>
  <form action="addEditoriales.php" method="post">
    <table align="center" width="80%">
      <tr>
        <td colspan="2"><h2>Añadir Editoriales</h2></td>
      </tr>
      <tr>
        <td colspan="2" align="right">Usuario: <?php echo $_SESSION['usu']?></td>
      </tr>
      <tr>
        <td>Editorial</td>
        <td><input type="text" name="f_editorial" id="f_editorial" maxlenght="50"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="ENVIAR">
          <input type="button" value="LISTADO" onclick="window.open('lstEditoriales.php', '_parent')">
        </td>
      </tr>
    </table>
  </form>
 
</body>
</html>