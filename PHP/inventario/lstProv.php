<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lstProv.php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>

    </style>

</head>
    <?php
    session_start();
    ?>
<body>
<div class="container">
        <table class="table table-striped">
            <tr>
                <td colspan="8"><img src="imagenes/logosz.jpg"></td>
            </tr>
        <table class="table">
            <p class="nav-item">
                <a class="nav-link disabled" align="right" tabindex="-1" aria-disabled="true">Usuario: <?php echo $_SESSION['usu'] ?></a>
            </p>
    </div>
    <div class="form-row">
        <tr>
            <td colspan="12">
                <h2> INVENTARIO </h2>
            </td>
        </tr>
        <tr>
            <td><b>ID</b></td>
            <td><b>NOMBRE</b></td>
            <td><b>DIRECCIÓN</b></td>
            <td><b>MUNICIPIO</b></td>
            <td><b>PROVINCIA</b></td>
            <td><b>TELEFONO</b></td>
            <td><b>TIPO DE PRODUCTO</b></td>
            <td></td>
        </tr>
        <?php
        include('conexion.php');
        $sql = "SELECT * FROM prov,tipoprod WHERE (prov.idTipo=tipoprod.idTipo)";
        $registros = mysqli_query($conexion, $sql);
        while ($linea = mysqli_fetch_array($registros)) {
            echo "<tr>
    <td>$linea[idProveedor]</td>
    <td>$linea[Nombre]</td>
    <td>$linea[Direccion]</td>
    <td>$linea[Municipio]</td>
    <td>$linea[Provincia]</td>
    <td>$linea[Telefono]</td>
    <td>$linea[idTipo]</td>
    <td><a href='delProv.php?codigo=$linea[idProveedor]'><img src='./imagenes/eliminar.png' width='40px'></td>
    </tr>";
        }
        ?>
        </table>
        <button type="button" class="btn btn-primary" onclick="window.open('formProv.php','_parent')">VOLVER</button>
    </div>


</body>

</html>