 <?php
 include('conexion.php');
 $sql="DELETE FROM prendas WHERE idPrenda=$_GET[codigo]";
 mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
 header("location:lstPrendas.php");
 ?>
