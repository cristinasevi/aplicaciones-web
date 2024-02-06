<?php

include("conexion.php");

// Creamos la consulta de inserción
$sql= "INSERT INTO ciclos (ciclo)
VALUES ('$_POST[f_ciclo]')"; 


// Ejecutar la consulta
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Cerramos la conexión
mysqli_close($conexion);

// Regresamos a la página de formLibros.php
header("location:formCiclos.php");
?>