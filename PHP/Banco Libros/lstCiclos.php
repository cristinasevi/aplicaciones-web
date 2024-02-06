<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>lstCiclos.php</title>
</head>
<body>
    <table align="center" width="90%" border="1">
        <tr>
            <td colspan="3"><h2 align="center">Información CICLOS</h2></td>
        </tr>
        <tr>
            <td>ID</td><td>CICLO</td><td></td>
        </tr>
    <?php 
    include("conexion.php");
    $sql="SELECT * FROM ciclos"; 
    $registros=mysqli_query($conexion,$sql); 
    while($linea=mysqli_fetch_array($registros)) 
    {
    echo "<tr><td>$linea[idCiclo]</td><td>$linea[ciclo]</td><td align='center'><a href='delCiclos.php?codigo=$linea[idCiclo]'><img src='./imagenes/eliminar.png' width='25px'></a></td></tr>";
    }
    ?>
</table>
</body>
</html>