<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Formulario Usuarios</title>
  </head>
  <body>
	<?php
	session_start();
	include("conexion.php");
	?>
	<div class="container">
	  <div class="form-group col-8 offset-2"> 
	    <img src="./imagenes/logosz.jpg" class="img-fluid">
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<a class="nav-link active" href="menu.php">Volver</a>
		  </li>
		</ul>

		<form action="addUsuarios.php" method="post">
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label>Usuario</label>
			  <input type="text" class="form-control" name="f_NombreUser" id="f_NombreUser" maxlenght="9">
			</div>
			<div class="form-group col-md-6">
			  <label>Password</label>
			  <input type="password" class="form-control" name="f_clave" id="f_clave" maxlenght="16">
			</div>
		  </div>
		  <div class="form-group">
			<label>Nombre Completo</label>
			<input type="text" class="form-control" name="f_nombrecompleto" id="f_nombrecompleto" maxlenght="40">
		  </div>
		  <div class="form-group">
			<label>Departamento</label>
			<select class="form-control" name="f_departamento" id="f_departamento">
            <option value="">
            <?php
            $sql="SELECT * FROM departec ";
            $registros=mysqli_query($conexion,$sql); 
            while($linea=mysqli_fetch_array($registros)) 
            {
              echo "<option value='$linea[idDepartamento]'>$linea[NombreDepar]"; 
            }
            ?>
          </select>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">ENVIAR</button>
		  <button type='button' class='btn btn-primary' onclick="window.open('lstUsuarios.php', '_parent')">LISTADO</button>
		  
		 <!-- if ( $_SESSION['usu'] = "Admin")
		  {
			"<button type='button' class='btn btn-primary' onclick='window.open('lstUsuarios.php', '_parent')'>LISTADO</button>";
		  }
		-->
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