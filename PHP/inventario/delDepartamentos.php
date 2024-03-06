<?php 
include("conexion.php");
$sql="DELETE FROM departec WHERE idDepartamento=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstDepartamentos.php");
?>