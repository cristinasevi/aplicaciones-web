<?php 
include("conexion.php");
$sql="DELETE FROM editorial WHERE idEditorial=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstEditoriales.php");
?>