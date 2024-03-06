<?php  
session_start();
if (!isset($_SESSION['usu'])) 
{
    header("location:inicio.php");
}
include("conexion.php");
$sql="INSERT INTO prov (Nombre, Direccion, Municipio, Provincia, Telefono, idTipo)
VALUES ('$_POST[f_nombre]','$_POST[f_direccion]','$_POST[f_municipio]','$_POST[f_provincia]',$_POST[f_telefono],$_POST[f_idTipo])";
mysqli_query($conexion,$sql) or die("Error en la consulta $sql");
mysqli_close($conexion);
header("location:formProv.php");
?>