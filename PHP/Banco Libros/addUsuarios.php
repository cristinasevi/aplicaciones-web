<?php

session_start();
include("conexion.php");

// Creamos la consulta de inserción
$sql= "INSERT INTO usuarios (idUsuario, nombrecompleto, email, movil, clave)
VALUES ('$_POST[f_idUsuario]', '$_POST[f_nombrecompleto]', '$_POST[f_email]', '$_POST[f_movil]', '$_POST[f_clave]')"; 


// Ejecutar la consulta
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Cerramos la conexión
mysqli_close($conexion);

// Regresamos a la página de formLibros.php
header("location:formUsuarios.php");
?>