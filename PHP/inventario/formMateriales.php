<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Materiales</title>
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

	  <div class="form-group col-8 offset-2"> 
	    <img src="./imagenes/logosz.jpg" class="img-fluid">
		<ul class="nav justify-content-end">
		<li class="nav-item">
					<a class="nav-link active" href="menu.php">Volver</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" tabindex="-1" aria-disabled="true">Usuario: <?php echo $_SESSION['usu'] ?></a>
				</li>
		</ul>
	
		<form action="addMateriales.php" method="post" enctype="multipart/form-data">
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label>Material</label>
			  <input type="text" class="form-control" name="f_material" id="f_material" maxlenght="40">
			</div>
			<div class="form-group col-md-6">
			  <label>Cantidad</label>
			  <input type="number" class="form-control" name="f_cantidad" id="f_cantidad">
			</div>
		  </div>
      <div class="form-group">
			<label>Aula</label>
			<select class="form-control" name="f_aula" id="f_aula">
            <option value="">
            <?php
            $sql="SELECT * FROM aula";
            $registros=mysqli_query($conexion,$sql); 
            while($linea=mysqli_fetch_array($registros)) 
            {
              echo "<option value='$linea[idAula]'>$linea[idAula]"; 
            }
            ?>
          </select>
		  </div>
		  <div class="form-group">
			<label>Proveedor</label>
			<select class="form-control" name="f_proveedor" id="f_proveedor">
            <option value="">
            <?php
            $sql="SELECT * FROM prov";
            $registros=mysqli_query($conexion,$sql); 
            while($linea=mysqli_fetch_array($registros)) 
            {
              echo "<option value='$linea[idProveedor]'>$linea[Nombre]"; 
            }
            ?>
          </select>
		  </div>
		  <div class="form-group">
			<label>Marca</label>
			<select class="form-control" name="f_marca" id="f_marca">
            <option value="">
            <?php
            $sql="SELECT * FROM marca";
            $registros=mysqli_query($conexion,$sql); 
            while($linea=mysqli_fetch_array($registros)) 
            {
              echo "<option value='$linea[idMarca]'>$linea[NombreMarca]"; 
            }
            ?>
          </select>
		  </div>
		   <div class="form-group">
			  <label>Imagen</label>
			  <input type="file" class="form-control" name="f_imagen" id="f_imagen">
			</div>
				 
		  
		  <button type="submit" class="btn btn-primary">ENVIAR</button>
		  <button type="button" class="btn btn-primary" onclick="window.open('lstMateriales.php', '_parent')">LISTADO</button>
		</form>

</div>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>