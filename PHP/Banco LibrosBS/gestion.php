<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>gestion.php</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
    session_start();
    include("conexion.php");
    if ( $_SESSION['usu'] != "admin")
    {
        header("location:logout.php");
    }
?>
    
<br><br>  
<div align="center">
    <h2 colspan="5">Menú</h2>
</div>

   <br><br> 
    <ul align="center"><a href="FormLibros.php">Libros</a></ul>
    <ul align="center"><a href="formUsuarios.php">Usuarios</a></ul>
    <ul align="center"><a href="formEditoriales.php">Editoriales</a></ul>
    <ul align="center"><a href="formCiclos.php">Ciclos</a></ul>
    <ul align="center"><a href="formModulos.php">Módulos</a></ul>
    <ul align="center"><a href="formAutores.php">Autores</a></ul>


</body>
</html>