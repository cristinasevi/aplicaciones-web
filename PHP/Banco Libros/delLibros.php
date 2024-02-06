<?php 
include("conexion.php");
$sql="DELETE FROM libros WHERE idLibro=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstLibros.php");
?>