<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Menu</title>
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
    <ul align="center"><a href="formMateriales.php">Materiales</a></ul>
    <ul align="center"><a href="formUsuarios.php">Usuarios</a></ul>
    <ul align="center"><a href="formDepartamentos.php">Departamentos</a></ul>
    <ul align="center"><a href="">Aula</a></ul>
    <ul align="center"><a href="">Ubicación</a></ul>
    <ul align="center"><a href="">Marca</a></ul>
    <ul align="center"><a href="">Proveedores</a></ul>
    <ul align="center"><a href="">Tipo producto</a></ul>

</body>
</html>