<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>FormLibros.php</title>
    <script language="JavaScript">
      function precioFinal()
      {
        f_precioFinal.value=f_precio.value - (f_precio.value*f_descuento.value/100);

      }

    </script>
  </head>
  <body>
  <?php
  session_start();
  if (!isset($_SESSION['usu']))
  {
	header ("location:inicio.php");
  }
  include("conexion.php");
  // Crear la consulta para leer datos en la tabla de módulos
  $sql="SELECT m.idModulo, m.modulo, c.ciclo FROM modulos as m, ciclos as c WHERE m.idCiclo=c.idCiclo";
  // Ejecución de la consulta
  $registros=mysqli_query($conexion,$sql) or die ("Error en la consulta $sql");
  // Crear la consulta para leer datos en la tabla de modulos
  $sql2="SELECT * FROM editorial";
  // Ejecución de la consulta
  $registros2=mysqli_query($conexion,$sql2) or die ("Error en la consulta $sql");
  ?>
	<div class="container">

	  <div class="form-group col-8 offset-2"> <!-- 8 columnas y 2 a los lados sin utilizar, en total 12 columnas -->
	    <img src="./imagenes/logosz.jpg" class="img-fluid">
		<ul class="nav justify-content-end">
		<li class="nav-item">
					<a class="nav-link active" href="gestion.php">Volver</a>
				</li>
		<li class="nav-item">
			<a class="nav-link active">Usuario: <?php echo $_SESSION['usu']?></a>
		  </li>
		</ul>
	
		<form action="addLibros.php" method="post" enctype="multipart/form-data">
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label>ISBN</label>
			  <input type="text" class="form-control" name="f_isbn" id="f_isbn" maxlenght="17">
			</div>
			<div class="form-group col-md-6">
			  <label>Título</label>
			  <input type="text" class="form-control" name="f_titulo" id="f_titulo" maxlenght="50">
			</div>
		  </div>
      <div class="form-group">
			<label>Autor</label>
			<select class="form-control" name="f_autor" id="f_autor">
            <option value="">
            <?php
            $sql="SELECT * FROM autores";
            $registros=mysqli_query($conexion,$sql); // Cuando se ejecuta mysqli_query de una consulta de selección, se guarda en $registros
            while($linea=mysqli_fetch_array($registros)) // Bucle while (mientras se cumpla $registros, vuelca los datos a un array que se llama $linea)
            {
              echo "<option value='$linea[idAutor]'>$linea[autor]"; 
            }
            ?>
          </select>
		  </div>
		  <div class="form-group">
			<label>Módulos</label>
			<select class="form-control" name="f_idmodulo" id="f_idmodulo" required>
            <option value="">
            <?php
            $sql="SELECT modulos.idModulo, modulos.modulo, ciclos.ciclo FROM modulos, ciclos WHERE (modulos.idCiclo=ciclos.idCiclo)"; // Saca todos los modulos, hay que unir las tablas
            $registros=mysqli_query($conexion,$sql); // Cuando se ejecuta mysqli_query de una consulta de selección, se guarda en $registros
            while($linea=mysqli_fetch_array($registros)) // Bucle while (mientras se cumpla $registros, vuelca los datos a un array que se llama $linea)
            {
              echo "<option value='$linea[idModulo]'>$linea[modulo] - $linea[ciclo]"; // Se puede poner - o , 
            }
            ?>
          </select>
		  </div>
		  <div class="form-group">
			<label>Editorial</label>
			<select class="form-control" name="f_ideditorial" id="f_ideditorial" required>
            <option value="">
            <?php
            $sql="SELECT * FROM editorial"; // Saca todas las editoriales
            $registros=mysqli_query($conexion,$sql); // Cuando se ejecuta mysqli_query de una consulta de selección, se guarda en $registros
            while($linea=mysqli_fetch_array($registros)) // Bucle while (mientras se cumpla $registros, vuelca los datos a un array que se llama $linea)
            {
              echo "<option value='$linea[idEditorial]'>$linea[editorial]";
            }
            ?>
          </select>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-3">
			  <label>Precio</label>
			  <input type="number" class="form-control" name="f_precio" id="f_precio">
			</div>
      <div class="form-group col-md-3">
			  <label>Descuento</label>
			  <input type="number" onblur="precioFinal()" class="form-control" name="f_descuento" id="f_descuento" placeholder="%">
			</div>
      <div class="form-group col-md-3">
			  <label>Precio Final</label>
			  <input readonly type="number" class="form-control" name="f_precioFinal" id="f_precioFinal" placeholder="">
			</div>
			<div class="form-group col-md-3">
			  <label>Vendido</label>
			  <select class="form-control" name="f_vendido" id="f_vendido">
            <option value="0">No
            <option value="1">Sí
          </select>
			</div>
       </div>
		   <div class="form-group">
			  <label>Portada del Libro</label>
			  <input type="file" class="form-control" name="f_portada" id="f_portada">
			</div>
			<div class="form-group">
			  <label>Comentarios</label>
			  <textarea class="form-control" rows="6" cols="40" name="f_comentarios" id="f_comentarios"></textarea>
			</div>
		 
		  
		  <button type="submit" class="btn btn-primary">ENVIAR</button>
		  <button type="button" class="btn btn-primary" onclick="window.open('lstLibros.php', '_parent')">LISTADO</button>
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