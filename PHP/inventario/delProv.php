<?php
session_start();
if (!isset($_SESSION['usu'])) 
{
    header("location:inicio.php");
}
include('conexion.php');
$sql="DELETE FROM prov WHERE idProveedor=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstProv.php");
?>