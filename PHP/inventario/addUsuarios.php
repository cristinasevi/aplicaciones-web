<?php
session_start();
include("conexion.php");

// Encriptar contraseña
$password = hash("sha256", $_POST['f_clave']); // $password = md5($_POST['f_clave']);

// Creamos la consulta para combrobar que no esté duplicado el usuario
$sql="SELECT * FROM usuarios WHERE idUser='$_POST[f_NombreUser]'";

// Ejecutar la consulta
$registros = mysqli_query($conexion, $sql) or die ("Error en la consulta $sql"); 

// Recuperar el número de registros de la consulta
$num = mysqli_num_rows($registros);

if ($num==0)
{
    // Creamos la consulta de inserción
    $sql= "INSERT INTO usuarios (NombreUser, NombreCompleto, clave, idDepartamento)
    VALUES ('$_POST[f_NombreUser]', '$_POST[f_nombrecompleto]', '$password', '$_POST[f_departamento]')"; 

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