<?php

include("conexion.php");

// Creamos la consulta de inserción
$sql= "INSERT INTO modulos (modulo, idCiclo)
VALUES ('$_POST[f_modulo]', $_POST[f_idciclo])"; 


// Ejecutar la consulta
mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Cerramos la conexión
mysqli_close($conexion);

// Regresamos a la página de formLibros.php
header("location:formModulos.php");
?>