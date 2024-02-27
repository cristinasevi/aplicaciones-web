<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>lstUsuarios.php</title>
</head>
<body>
    <table align="center" width="90%" border="1">
        <tr>
            <td colspan="6"><h2 align="center">Información USUARIOS</h2></td>
        </tr>
        <tr>
            <td>ID</td><td>USUARIO</td><td>EMAIL</td><td>TELÉFONO</td><td>CLAVE</td><td></td>
        </tr>
    <?php 
    include("conexion.php");
    $sql="SELECT * FROM usuarios"; 
    $registros=mysqli_query($conexion,$sql); 
    while($linea=mysqli_fetch_array($registros)) 
    {
    echo "<tr><td>$linea[idUsuario]</td><td>$linea[nombrecompleto]</td><td>$linea[email]</td><td>$linea[movil]</td><td>$linea[clave]</td><td align='center'><a href='delUsuarios.php?codigo=$linea[idUsuario]'><img src='./imagenes/eliminar.png' width='25px'></a></td></tr>";
    }
    ?>
</table>
</body>
</html>