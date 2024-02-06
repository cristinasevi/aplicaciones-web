<?php
// Iniciar el uso de variables de SESSION
session_start();

include("conexion.php");
// Preparamos la consulta
$sql="SELECT * FROM usuarios WHERE idUsuario='$_POST[f_usuario]' and clave='$_POST[f_clave]'";
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
    header("location:gestion.php");
}
?>