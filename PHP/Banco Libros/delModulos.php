<?php 
include("conexion.php");
$sql="DELETE FROM modulos WHERE idModulo=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstModulos.php");
?>