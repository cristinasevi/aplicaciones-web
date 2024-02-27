<?php

session_start();
include("conexion.php");

// Creamos la consulta de inserción
$sql= "INSERT INTO autores (autor)
VALUES ('$_POST[f_autor]')"; 


// Ejecutar la consulta
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Cerramos la conexión
mysqli_close($conexion);

// Regresamos a la página de formLibros.php
header("location:formAutores.php");
?>