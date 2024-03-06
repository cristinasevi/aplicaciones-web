<?php 
include("conexion.php");
$sql="DELETE FROM usuarios WHERE idUser=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstUsuarios.php");
?>