<?php
session_start();
include("conexion.php");

// Creamos la consulta de inserción
$sql="INSERT INTO prendas (prenda, idTipo, imagen, precio, descuento, detalles) VALUES ('$_POST[f_prenda]',$_POST[f_idTipo],'$_POST[f_imagen]',$_POST[f_precio],$_POST[f_descuento],'$_POST[f_detalles]')";

//echo "$sql";

// Ejecutar la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta $sql");

// Cerramos la conexion
mysqli_close($conexion);

// Regresamos a la página de formLibros.php
header("location:formPrendas.php");
?>