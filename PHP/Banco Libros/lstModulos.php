<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>lstModulos.php</title>
</head>
<body>
    <table align="center" width="90%" border="1">
        <tr>
            <td colspan="4"><h2 align="center">Información MODULOS</h2></td>
        </tr>
        <tr>
            <td>ID</td><td>MODULO</td><td>CICLO</td><td></td>
        </tr>
    <?php 
    include("conexion.php");
    $sql="SELECT modulos.idModulo, modulos.modulo, ciclos.ciclo FROM modulos, ciclos WHERE (modulos.idCiclo=ciclos.idCiclo)"; 
    $registros=mysqli_query($conexion,$sql); 
    while($linea=mysqli_fetch_array($registros)) 
    {
    echo "<tr><td>$linea[idModulo]</td><td>$linea[modulo]</td><td>$linea[ciclo]</td><td align='center'><a href='delModulos.php?codigo=$linea[idModulo]'><img src='./imagenes/eliminar.png' width='25px'></a></td></tr>";
    }
    ?>
</table>
</body>
</html>