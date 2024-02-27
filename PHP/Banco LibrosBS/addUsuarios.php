<?php
session_start();
include("conexion.php");

// Encriptar contraseña
$password = hash("md5", $_POST['f_clave']); // $password = md5($_POST['f_clave']);

// Creamos la consulta para combrobar que no esté duplicado el usuario
$sql="SELECT * FROM usuarios WHERE idUsuario='$_POST[f_idUsuario]'";

// Ejecutar la consulta
$registros = mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Recuperar el número de registros de la consulta
$num = mysqli_num_rows($registros);

if ($num==0)
{
    // Creamos la consulta de inserción
    $sql= "INSERT INTO usuarios (idUsuario, nombrecompleto, email, movil, clave)
    VALUES ('$_POST[f_idUsuario]', '$_POST[f_nombrecompleto]', '$_POST[f_email]', '$_POST[f_movil]', '$password')"; 

    // Ejecutar la consulta
    mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 
    
    // Regresamos a la página de inicio.php
    header("location:inicio.php");
}
else 
{
    echo "<a href='formUsuarios.php'>Usuario DUPLICADO, introduzca uno diferente</a>";
}
// Cerramos la conexión
mysqli_close($conexion);
?>