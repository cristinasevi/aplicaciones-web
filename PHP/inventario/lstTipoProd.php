<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lstTipoProd.php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<?php
  session_start();
  ?>
<body>
    <div class="container">
        <div class="form-group col-6 offset-3">
            <img src="./imagenes/logosz.jpg" class="img-fluid">
        </div>
        <table class="table">
            <p class="nav-item">
                <a class="nav-link disabled" align="right" tabindex="-1" aria-disabled="true">Usuario: <?php echo $_SESSION['usu'] ?></a>
            </p>
    </div>
    <table class="table">
                <tr>
                    <td colspan="11">
                        <h2> INVENTARIO </h2>
                    </td>
                </tr>
                <tr>
                    <td><b>TIPO DE PRODUCTO</b></td>
                    <td align="right"><b>ELIMINAR</b></td>
                </tr>
        <?php
        include('conexion.php');
        $sql = "SELECT * FROM tipoprod";
        $registros = mysqli_query($conexion, $sql);
        while ($linea = mysqli_fetch_array($registros)) {
            echo "<tr>
    <td width='100%'>$linea[NombreTipo]</td>
    <td><a href='delTipoProd.php?codigo=$linea[idTipo]'><img src='./imagenes/eliminar.png'  align='right' width='40px'></td>
    </tr>";
        }
        ?>
    </table>
    <button type="button" class="btn btn-primary" onclick="window.open('formTipoProd.php','_parent')">VOLVER</button>
    </div>
</body>

</html>