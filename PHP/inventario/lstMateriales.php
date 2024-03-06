<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Listado Materiales</title>
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
                <td colspan="8"><img src="imagenes/logosz.jpg"></td>
            </tr>
            <tr>
            <td colspan="8" align="right">Usuario: <?php echo $_SESSION['usu']?> &nbsp; &nbsp; <a href="FormMateriales.php">Volver</td>
        </tr>
            <tr>
                <td>ID</td><td>IMAGEN</td><td>MATERIAL</td><td>CANTIDAD</td><td>AULA</td><td>PROVEEDOR</td><td>MARCA</td><td></td>
            </tr>
        <?php 
        include("conexion.php");
        // Crear la consulta para leer datos en la tabla de libros
        
        if($_SESSION['usu']=="admin")
        {
          $sql="SELECT * FROM materiales";
        }
        else
        {
          $sql="SELECT * FROM materiales AS m 
          INNER JOIN aula AS a ON a.idAula=m.idAula
          INNER JOIN usuarios AS u ON u.idDepartamento=a.idDepartamento
          WHERE u.NombreUser='$_SESSION[usu]'
          ORDER BY idMateriales";
        }
            // Ejecucuion de la consulta
            $registros=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
            while($linea=mysqli_fetch_array($registros))
            {
              echo "<tr><td>$linea[idMateriales]</td><td><img src='$linea[imagen]' width='80px'></td><td>$linea[NombreMat]</td><td>$linea[Cantidad]</td><td>$linea[idAula]</td><td>$linea[idProveedor]</td><td>$linea[idMarca]</td><td><a href='delMateriales.php?codigo=$linea[idMateriales]'><img src='./imagenes/eliminar.png' width='25px'></a></td></tr>";
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