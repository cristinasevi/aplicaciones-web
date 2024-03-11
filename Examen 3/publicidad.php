<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	 <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>publicidad.php</title>
  </head>
 <body>
 <?php
  include("conexion.php");
  // Creamos la consulta
  $sql="SELECT * from prendas";
  // Ejecutamos la consulta
  $registros=mysqli_query($conexion,$sql) or die("Error en la ejecución de la consulta $sql");
 ?>
<div class="container">
	<div class="form-group col-10 offset-1">
	    <img src="./imagenes/logo.png" class="img-fluid">
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<a class="nav-link" href="inicio.php">Administrar contenido</a>
		  </li>
		</ul>
		<div class="card-columns row">
	  <?php
	  while($linea=mysqli_fetch_array($registros))
		{
			// Calculamos el precio con el descuento aplicado.
			$precio=$linea['precio']-$linea['descuento'];
			// Presentamos la información de la tabla y el precio calculado con el descuento.
			echo "<div class='card' style='width: 14rem;'>
			<img class='card-img-top' src='$linea[imagen]'>
			<div class='card-body'>
			<h6 class='card-title'>$linea[prenda]</h6>
			<center><h3 class='card-title'>$precio €</h3></center>
			</div>
		    </div>";
		}
?>
		</div>
	</div> <!-- for-group -->
</div><!-- container -->

 </body>
</html>
