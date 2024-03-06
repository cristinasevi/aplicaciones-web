<?php
session_start();
if (!isset($_SESSION['usu'])) 
{
    header("location:inicio.php");
}
include('conexion.php');
$sql="DELETE FROM marca WHERE idMarca=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstMarca.php");
?>