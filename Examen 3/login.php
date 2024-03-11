<?php
// Iniciar el uso de variables de SESSION
session_start();
include("conexion.php");

// Encriptar la clave introducida por el usuario
$claveEncriptada=MD5($_POST['f_pass']);

// Preparamos la consulta
$sql="SELECT * FROM entradas WHERE idEntrada='$_POST[f_idEntrada]' and password='$claveEncriptada'";

// Ejecutamos la consulta
$registros=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");

// Recuperar el número de registros de la consulta
$num=mysqli_num_rows($registros);
if($num==0)
{
	echo "Usuario o Clave INCORRECTOS <a href='inicio.php'>Volver</a>";
}
else
{
	// Guardamos el usuario identificado en una variable de SESSION llamada usuario
	$_SESSION['usuario']=$_POST['f_idEntrada'];
	header("location:lstPrendas.php");

}
?>
