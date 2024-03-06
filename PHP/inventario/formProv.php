<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>formProv.php</title>
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
				<li class="nav-item">
					<a class="nav-link disabled" tabindex="-1" aria-disabled="true">Usuario: <?php echo $_SESSION['usu'] ?></a>
				</li>
			</ul>

			<form action="addProv.php" method="post">
				<div class="form-row">
					<div class="form-group col-md-5">
						<label>Nombre</label>
						<input type="text" name="f_nombre" id="f_nombre" maxlength="17" class="form-control">
					</div>
					<div class="form-group col-md-7">
						<label>Direccion</label>
						<input type="text" name="f_direccion" id="f_direccion" maxlength="17" class="form-control" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Municipio</label>
						<input type="text" name="f_municipio" id="f_municipio" maxlength="17" class="form-control" required>
					</div>
					<div class="form-group col-md-6">
						<label>Provincia</label>
						<input type="text" name="f_provincia" id="f_provincia" maxlength="17" class="form-control" required>
					</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-5">
							<label>Teléfono</label>
							<input type="tel" name="f_telefono" id="f_telefono" maxlength="9" class="form-control" required>
						</div>
						<div class="form-group col-md-7">
							<label>Tipo de Producto</label>
							<select name="f_idTipo" id="f_idTipo" class="form-control" required>
								<option value="">
									<?php
									$sql = "SELECT tipoprod.NombreTipo FROM tipoprod ,prov WHERE (prov.idTipo=tipoprod.idTipo);";
									$registros = mysqli_query($conexion, $sql);
									while ($linea = mysqli_fetch_array($registros)) {
										echo "<option value=$linea[NombreTipo]> $linea[NombreTipo] </option>";
									}
									?>
							</select>
						</div>
					</div>
				
				<div class="form-row " style="gap: .25rem">

				<button type="submit" class="btn btn-primary">ENVIAR</button>
				<button type="button" class="btn btn-primary" onclick="window.open('lstProv.php','_parent')">LISTADO</button>
				</div>
			</form>

		</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>