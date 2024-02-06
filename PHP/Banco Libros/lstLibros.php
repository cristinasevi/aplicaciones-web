<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>lstLibros.php</title>
</head>
<body>
    <table align="center" width="90%" border="1">
        <tr>
            <td colspan="11"><h2 align="center">Información LIBROS</h2></td>
        </tr>
        <tr>
            <td>ID</td><td>ISBN</td><td>TITULO</td><td>MODULO</td><td>EDITORIAL</td><td>USUARIO</td><td>PRECIO</td><td>VENDIDO</td><td>FECHA</td><td>COMENTARIOS</td><td></td>
        </tr>
    <?php 
    include("conexion.php");
    $sql="SELECT libros.*, editorial.*, modulos.* FROM libros, editorial, modulos WHERE (libros.idEditorial=editorial.idEditorial and libros.idModulo=modulos.idModulo) ORDER BY libros.idLibro"; // ORDER BY libros.idLibro DESC --> ordena de mayor a menor
    $registros=mysqli_query($conexion,$sql); 
    while($linea=mysqli_fetch_array($registros)) 
    {
    echo "<tr><td>$linea[idLibro]</td><td>$linea[isbn]</td><td>$linea[titulo]</td><td>$linea[modulo]</td><td>$linea[editorial]</td><td>$linea[idUsuario]</td><td>$linea[precio]</td><td>$linea[vendido]</td><td>$linea[fechaAlta]</td><td>$linea[comentarios]</td><td align='center'><a href='delLibros.php?codigo=$linea[idLibro]'><img src='./imagenes/eliminar.png' width='25px'></a></td></tr>";
    }
    ?>
</table>
</body>
</html>