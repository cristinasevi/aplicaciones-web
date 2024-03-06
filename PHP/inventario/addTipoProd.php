<?php  
session_start();
if (!isset($_SESSION['usu'])) 
{
    header("location:inicio.php");
}
include("conexion.php");
$sql="INSERT INTO tipoprod (NombreTipo)
VALUES ('$_POST[f_nombretipo]')";
mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
mysqli_close($conexion);
header("location:formTipoProd.php");
?>