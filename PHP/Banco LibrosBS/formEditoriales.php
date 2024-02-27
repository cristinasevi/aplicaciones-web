<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Plantilla BootStrap</title>
  </head>
  <body>
  <?php
  session_start();
  include("conexion.php");
  ?>
	<div class="container">

	  <div class="form-group col-8 offset-2"> <!-- 8 columnas y 2 a los lados sin utilizar, en total 12 columnas -->
	    <img src="./imagenes/logosz.jpg" class="img-fluid">
		<ul class="nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link active">Usuario: <?php echo $_SESSION['usu']?></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="gestion.php">Volver</a>
		  </li>
		</ul>

		<form action="addEditoriales.php" method="post">
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label>Editorial</label>
			  <input type="text" class="form-control" name="f_editorial" id="f_editorial" maxlenght="50">
			</div>
		  </div>
		
		  
		  <button type="submit" class="btn btn-primary">ENVIAR</button>
		  <button type="button" class="btn btn-primary" onclick="window.open('lstEditoriales.php', '_parent')">LISTADO</button>
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