<?php  
session_start();
if (!isset($_SESSION['usu'])) 
{
    header("location:inicio.php");
}
include("conexion.php");
$sql="INSERT INTO marca (NombreMarca)
VALUES ('$_POST[f_nombremarca]')";
mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
mysqli_close($conexion);
header("location:formMarca.php");
?>