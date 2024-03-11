<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<title>formPrendas.php</title>
</head>

<body>
	<?php
	session_start();
	include("conexion.php");
	?>
	<div class="container">
		<div class="form-group col-6 offset-3">
			<img src="./imagenes/logo.png" class="img-fluid">
			<ul class="nav justify-content-end">
				<li class="nav-item">
					<a class="nav-link disabled" tabindex="-1" aria-disabled="true">Usuario:
						<?php echo $_SESSION['usuario'] ?>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="publicidad.php">Volver</a>
				</li>
			</ul>
			<form action="addPrendas.php" method="post">
				<div class="form-row">
					<div class="form-group col-md-9">
						<label>Prenda</label>
						<input type="text" class="form-control" name="f_prenda" id="f_prenda" maxlength="50">
					</div>
					<div class="form-group col-md-3">
						<label>Tipo</label>
						<select name="f_idTipo" id="f_idTipo" class="form-control" required>
							<option value="">
								<?php
								$sql = "SELECT * from tipos";
								$registros = mysqli_query($conexion, $sql);
								while ($linea = mysqli_fetch_array($registros)) {
									echo "<option value='$linea[idTipo]'>$linea[tipo]";
								}
								?>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label>Imagen</label>
						<input type="file" name="f_imagen" id="f_imagen" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Precio</label>
						<input type="number" name="f_precio" id="f_precio" class="form-control">
					</div>
					<div class="form-group col-md-4">
						<label>Descuento</label>
						<input type="number" name="f_descuento" id="f_descuento" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Detalles</label>
						<textarea rows="6" cols="40" name="f_detalles" id="f_detalles" class="form-control"></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">ENVIAR</button>
			</form>

		</div>

	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
</body>

</html>