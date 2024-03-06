<?php

session_start();
include("conexion.php");

// Creamos la consulta de inserción
$sql= "INSERT INTO departec (NombreDepar)
VALUES ('$_POST[f_departamento]')"; 


// Ejecutar la consulta
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Cerramos la conexión
mysqli_close($conexion);

// Regresamos a la página de formLibros.php
header("location:formDepartamentos.php");
?>