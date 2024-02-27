<?php
// Iniciar el uso de variables de SESSION
session_start();

include("conexion.php");

// Preparamos la consulta
$password = hash("md5", $_POST['f_clave']); // Encriptar contraseña
$sql="SELECT * FROM usuarios WHERE idUsuario='$_POST[f_usuario]' and clave='$password'";

// Ejecutamos la consulta
$registros=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");

// Recuperar el número de registros de la consulta
$num=mysqli_num_rows($registros);
if($num==0)
{
    echo "Usuario o Clave INCORRECTOS <a href='inicio.php'>Volver</a>";
}
else
{
    // Guardamos el usuario identificado en una variable de session llamada usu
    $_SESSION['usu']=$_POST['f_usuario'];
    // Modificamos la fecha del último acceso del usuario y ejecutamos la consulta
    $sql="UPDATE usuarios SET fechaultimoacceso=now() WHERE idUsuario='$_POST[f_usuario]'";
    mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
    
    if ($_POST['f_usuario']=='admin')
    {
        header("location:gestion.php");
    }
    else 
    {
        header("location:FormLibros.php");
    }
}
?>