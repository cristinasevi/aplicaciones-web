<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>lstLibros.php</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['usu']))
    {
      header ("location:inicio.php");
    }
    include("conexion.php");
    ?>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td colspan="12"><img src="imagenes/logosz.jpg"></td>
            </tr>
            <tr>
            <td colspan="12" align="right">Usuario: <?php echo $_SESSION['usu']?> &nbsp; &nbsp; <a href="FormLibros.php">Volver</td>
        </tr>
            <tr>
                <td>ID</td><td>Portada</td><td>ISBN</td><td>TITULO</td><td>MODULO</td><td>EDITORIAL</td><td>USUARIO</td><td>PRECIO</td><td>VENDIDO</td><td>FECHA</td><td>COMENTARIOS</td><td></td>
            </tr>
        <?php 
        include("conexion.php");
        // Crear la consulta para leer datos en la tabla de libros
        
        if($_SESSION['usu']=="admin")
        {
          $sql="SELECT  l.*,m.*,e.* FROM libros as l, modulos as m, editorial as e WHERE l.idModulo=m.idModulo and l.idEditorial=e.idEditorial";
        }
        else
        {
          $sql="SELECT libros.*, editorial.*, modulos.* FROM libros, editorial, modulos WHERE (libros.idEditorial=editorial.idEditorial and libros.idModulo=modulos.idModulo) and libros.idUsuario='$_SESSION[usu]' ORDER BY libros.idLibro";
        }
        
            // Ejecucuion de la consulta
            $registros=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
            while($linea=mysqli_fetch_array($registros))
            {
              echo "<tr><td>$linea[idLibro]</td><td><img src='$linea[imagenportada]' width='80px'></td><td>$linea[isbn]</td><td>$linea[titulo]</td><td>$linea[modulo]</td><td>$linea[editorial]</td><td>$linea[idUsuario]</td><td>$linea[precio]</td><td>$linea[vendido]</td><td>$linea[fechaAlta]</td><td>$linea[comentarios]</td><td align='center'><a href='delLibros.php?codigo=$linea[idLibro]'><img src='./imagenes/eliminar.png' width='25px'></a></td></tr>";
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