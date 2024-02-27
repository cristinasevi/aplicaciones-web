<?php
include("conexion.php");
// Recupero el valor del parámetro id enciado por String y lo gardo en $valor
$valor=$_GET['id'];

// Preparo en dos variables los nombres completo de los campos del formulario
$nombre="f_nombre$valor";
$email="f_email$valor";

$sql="INSERT INTO contactos (nombre, email, idLibro)
VALUES ('$_POST[$nombre]','$_POST[$email]', $valor)";

// Ejecutamos la consulta
mysqli_query($conexion,$sql) or die ("Error en la consulta de inserción $sql");

// Regreso a la página inicio
header("location:index.php");

// Cerramos la conexión
mysqli_close($conexion);
?>