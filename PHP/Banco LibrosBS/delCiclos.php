<?php 
include("conexion.php");
$sql="DELETE FROM ciclos WHERE idCiclo=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstCiclos.php");
?>