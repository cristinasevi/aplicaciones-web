<?php 
include("conexion.php");
$sql="DELETE FROM autores WHERE idAutor=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstAutores.php");
?>