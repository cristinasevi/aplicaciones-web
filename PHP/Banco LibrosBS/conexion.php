<?php
// Conectamos con la base de datos
$conexion= mysqli_connect("localhost", "root", "", "bancolibros") or die ("Error en la conexión");

/*
localhost --> es el nombre del servidor, se tiene que poner la dirección
root --> usuario que se va a conectar a la base de datos
"" --> clave para acceder a la base de datos, en este caso no tiene
bancolibros --> base de datos con la que quiero conectar

or die --> si algo de la conexión ha salido erroneo, va a saltar un mensaje
*/

?>

