<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
   <!-- Bootstrap CSS -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <title>lstPrendas.php</title>
 </head>
 <body>
 <?php
   session_start();
 ?>
	<div class="container">
	  <div class="form-group col-10 offset-1">
	    <img src="./imagenes/logo.png" class="img-fluid">
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<a class="nav-link disabled" tabindex="-1" aria-disabled="true">Usuario: <?php echo $_SESSION['usuario']?></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="formPrendas.php">Nueva Prenda</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="publicidad.php">Volver</a>
		  </li>
		</ul>

		<table class="table table-striped">
		 <tr>
			 <th>IMAGEN</th><th>ID</th><th>PRENDA</th><th>TIPO</th><th>PRECIO</th><th>DESCUENTO</th><th>DETALLES</th><th></th>
		 </tr>
		<?php
  		include('conexion.php');
		
		$sql="SELECT prendas.*, tipos.* FROM prendas, tipos WHERE (prendas.idTipo=tipos.idTipo)";
		$registros=mysqli_query($conexion,$sql);
		while($linea=mysqli_fetch_array($registros))
		{
		echo "<tr><td><img src='$linea[imagen]' width='32'></td><td>$linea[idPrenda]</td><td>$linea[prenda]</td><td>$linea[tipo]</td><td>$linea[precio]</td><td>$linea[descuento]</td><td>$linea[detalles]</td><td><a href='delPrendas.php?codigo=$linea[idPrenda]'><img src='./imagenes/borrar.png' width='30'></a></td></tr>";
		}
		?>
		</table>
 		</div>
	</div>

 </body>
</html>
