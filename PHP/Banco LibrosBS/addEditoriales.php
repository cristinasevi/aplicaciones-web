<?php

session_start();
include("conexion.php");

// Creamos la consulta de inserción
$sql= "INSERT INTO editorial (editorial)
VALUES ('$_POST[f_editorial]')"; 


// Ejecutar la consulta
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Cerramos la conexión
mysqli_close($conexion);

// Regresamos a la página de formLibros.php
header("location:formEditoriales.php");
?>