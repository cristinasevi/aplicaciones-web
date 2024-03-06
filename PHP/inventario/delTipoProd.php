<?php
session_start();
if (!isset($_SESSION['usu'])) 
{
    header("location:inicio.php");
}
include('conexion.php');
$sql="DELETE FROM tipoprod WHERE idTipo=$_GET[codigo]";
mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
header("location:lstTipoProd.php");
?>