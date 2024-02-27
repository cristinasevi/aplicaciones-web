<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>gestion.php</title>
</head>
<body>
    <?php
    session_start();
    include("conexion.php");
?>
<table align="center" border="0" width="50%">
    <tr>
        <td align="center" colspan="5"><h1>¡Bienvenid@ <?php echo $_SESSION['usu']?>!</h1></td>
    </tr>
    <tr>
        <td align="center" colspan="5"><h4>¿A dónde quieres ir?</h4></td>
    </tr>
    <tr>
        <td align="center"><a href="FormLibros.php">Libros</a></td>
        <td align="center"><a href="formUsuarios.php">Usuarios</a></td>
        <td align="center"><a href="formEditoriales.php">Editoriales</a></td>
        <td align="center"><a href="formCiclos.php">Ciclos</a></td>
        <td align="center"><a href="formModulos.php">Módulos</a></td>
    </tr>
</table>
</body>
</html>