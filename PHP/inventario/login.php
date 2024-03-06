<?php
session_start();
include("conexion.php");
$password = hash("sha256", $_POST['f_clave']); // Encriptar contraseña
$sql="SELECT * FROM usuarios WHERE NombreUser='$_POST[f_usuario]' and clave='$password'";
$registros=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
$num=mysqli_num_rows($registros);
if($num==0)
{
    echo "Usuario o Clave INCORRECTOS <a href='inicio.php'>Volver</a>";
}
else
{
    $_SESSION['usu']=$_POST['f_usuario'];
    $sql="UPDATE usuarios SET fechaUltima=now() WHERE NombreUser='$_POST[f_usuario]'";
    mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
    
    if ($_POST['f_usuario']=='admin' || $_POST['f_usuario']=='Admin')
    {
        $_POST['f_usuario'] = $_POST['usu']=="Admin" ? "admin" :"admin";
       $_POST['f_usuario']=$_SESSION['usu'];
        header("location:menu.php");
    }
    else 
    {
        header("location:formMateriales.php");
    }
}
?>