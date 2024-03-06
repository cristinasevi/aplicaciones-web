<?php  
session_start();
if (!isset($_SESSION['usu'])) 
{
    header("location:inicio.php");
}
include("conexion.php");
$sql="INSERT INTO ubi (NombreUbicacion)
VALUES ('$_POST[f_nombreubi]')";
mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
mysqli_close($conexion);
header("location:formUbi.php");
?>