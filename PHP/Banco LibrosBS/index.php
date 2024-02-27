<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Index.php</title>
</head>

<body>
	<?php
	include("conexion.php");
	$sql = "SELECT * FROM ciclos";
	$registros = mysqli_query($conexion, $sql) or die("Error en la consulta: $sql");
	$sql2 = "SELECT * FROM editorial";
	$registros2 = mysqli_query($conexion, $sql2) or die("Error en la consulta: $sql2");
	if (isset($_GET['campo'])) {
		if ($_GET['campo'] == 'ideditorial') {
			$sql3 = "SELECT * FROM libros WHERE idEditorial=$_GET[buscar] ORDER BY titulo";
		} else {
			$sql3 = "SELECT l.*, m.*, c.* FROM libros as l, modulos as m, ciclos as c WHERE l.idModulo=m.idModulo 
			and m.idCiclo=c.idCiclo and c.idCiclo=$_GET[buscar] ORDER BY titulo";
		}
	} else {
		$sql3 = "SELECT * FROM libros ORDER BY titulo";
	}
	$registros3 = mysqli_query($conexion, $sql3) or die("Error en la consulta: $sql3");
	?>

	<div class="container">


		<div class="form-group col-10 offset-1">
			<img src="./imagenes/logosz.jpg" class="img-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="http://salesianos.edu/zaragoza">Web Salesianos<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Editoriales
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php
								while ($linea = mysqli_fetch_array($registros2))    //hay que tener siempre un contenedor siempre que se ejecute mysqli_query 
								{
									echo "<a class='dropdown-item' href='index.php?buscar=$linea[idEditorial]&campo=ideditorial'>$linea[editorial]</a>";
								}
								?>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Ciclos
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php
								while ($linea = mysqli_fetch_array($registros))    //hay que tener siempre un contenedor siempre que se ejecute mysqli_query 
								{
									echo "<a class='dropdown-item' href='index.php?buscar=$linea[idCiclo]&campo=idciclo'>$linea[ciclo]</a>";
								}
								?>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link text-primary" href="inicio.php">Iniciar sesión</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
			<div class="row">
				<?php
				while ($linea = mysqli_fetch_array($registros3)) {
					$id = $linea['idLibro'];
					$precio = $linea['precio']*(1-$linea['descuento']/100);
				?>
					<div class="col-sm-3" style="margin-top: 10px;">
						<div class="card" style="height: 100%; ">
							<img src="<?php echo $linea['imagenportada'] ?>" width="250" height="250" class="card-img-top">
							<div class="card-body">
								<h4 class="card-title"><?php echo $linea['titulo'] ?></h4>
								<h3 class="card-title"><?php echo $precio ?>€</h3>
								<p class="card-text"><?php echo $linea['comentarios'] ?></p>
							</div>
							<div class="card-footer">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $id ?>">
									Comprar
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModalCenter<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalCenterTitle">Contactar con el vendedor del libro</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<form name="datos" action="addContactos.php?id=<?php echo $id ?>" method="post">
												<div class="modal-body">
													<div class="form-group">
														<input type="text" class="form-control" id="f_nombre<?php echo $id ?>" name="f_nombre<?php echo $id ?>" placeholder="Nombre y Apellidos">
													</div>
													<div class="form-group">
														<input type="email" class="form-control" id="f_email<?php echo $id ?>" name="f_email<?php echo $id ?>" placeholder="email de contacto">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
													<button type="submit" class="btn btn-primary">Enviar</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>

		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>