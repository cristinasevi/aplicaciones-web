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
<div class="container">
        <div class="form-group col-8 offset-3">
            <img src="./imagenes/logosz.jpg" class="img-fluid">
            <ul class="nav justify-content-end align-items-center">
                <li class="nav-item">
                    <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Usuario: <?php echo $_SESSION['usu'] ?></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php"><img src="./imagenes/logoutt.png" width="30px"></a>
                </li>
            </ul>
        </div>
        <div class="">
            <h1>MENU</h1>
            <div style="display: flex; justify-content: flex-start; margin: 0; padding: 0">
                <div class="form-group col-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Materiales</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('formMateriales.php','_parent')">IR</button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2 offset-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Usuarios</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('formUsuarios.php','_parent')">IR</button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2.5 offset-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Departamentos</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('formDepartamentos.php','_parent')">IR</button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2 offset-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Aula</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('','_parent')">IR</button>
                        </div>
                    </div>
                </div>
                </div>
<div style="display: flex; justify-content: flex-start; margin: 0; padding: 0">

                <div class="form-group col-2 offset-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ubicación</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('formUbi.php','_parent')">IR</button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2 offset-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Marca</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('formMarca.php','_parent')">IR</button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-2.5 offset-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Proveedores</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('formProv.php','_parent')">IR</button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-3 offset-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tipo de productos</h5>
                            <button type="button" class="btn btn-primary" onclick="window.open('formTipoProd.php','_parent')">IR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>