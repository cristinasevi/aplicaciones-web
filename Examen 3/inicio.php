<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	 <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>inicio.php</title>
  </head>
 <body>
<div class="container">
	<div class="form-group col-4 offset-4">
	    <img src="./imagenes/logo.png">
		<ul class="nav justify-content-end">
		  <li class="nav-item">
			<a class="nav-link" href="publicidad.php">Volver</a>
		  </li>
		</ul>
		<form action="login.php" method="post">
		  <div class="form-group">
			<label>Usuario</label>
			<input type="text" class="form-control" name="f_idEntrada" id="f_idEntrada" maxlength="15">
		  </div>
		  <div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="f_pass" id="f_pass" maxlength="12">
		  </div>
		  <br>
		  <div class="form-group">
			  <center><button type="submit" class="btn btn-primary">ACCEDER</button></center>
		  </div>
	  </form>
 </body>
</html>

