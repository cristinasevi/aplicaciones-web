<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>lstEditoriales.php</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <table class="table table-striped">
        <tr>
            <td colspan="3"><img src="imagenes/logosz.jpg"></td>
        </tr>
        <tr>
        <td colspan="11" align="right"><a href="formEditoriales.php">Volver</td>
      </tr>
        <tr>
            <td>ID</td><td>EDITORIAL</td><td></td>
        </tr>
    <?php 
    include("conexion.php");
    $sql="SELECT * FROM editorial ORDER BY editorial.idEditorial"; 
    $registros=mysqli_query($conexion,$sql); 
    while($linea=mysqli_fetch_array($registros)) 
    {
    echo "<tr><td>$linea[idEditorial]</td><td>$linea[editorial]</td><td align='center'><a href='delEditorial.php?codigo=$linea[idEditorial]'><img src='./imagenes/eliminar.png' width='25px'></a></td></tr>";
    }
    ?>
    </table>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>