<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>FormLibros.php</title>
</head>
<body>
  <?php
  session_start();
  include("conexion.php");
  ?>
  <form action="addLibros.php" method="post">
    <table align="center" width="80%">
      <tr>
        <td colspan="2"><h2>Bancolibros</h2></td>
      </tr>
      <tr>
        <td colspan="2" align="right">Usuario: <?php echo $_SESSION['usu']?> &nbsp; &nbsp; <a href="inicio.php">Volver</td>
      </tr>
      <tr>
        <td>ISBN</td>
        <td><input type="text" name="f_isbn" id="f_isbn" maxlenght="17"></td>
      </tr>
      <tr>
        <td>Título</td>
        <td><input type="text" name="f_titulo" id="f_titulo" maxlenght="50"></td>
      </tr>
      <tr>
        <td>Módulo</td>
        <td>
          <select name="f_idmodulo" id="f_idmodulo" required>
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
        </td>
      </tr>
      <tr>
        <td>Editorial</td>
        <td>
          <select name="f_ideditorial" id="f_ideditorial" required>
            <option value="">
            <?php
            $sql="SELECT * FROM editorial"; // Saca todas las editoriales
            $registros=mysqli_query($conexion,$sql); // Cuando se ejecuta mysqli_query de una consulta de selección, se guarda en $registros
            while($linea=mysqli_fetch_array($registros)) // Bucle while (mientras se cumpla $registros, vuelca los datos a un array que se llama $linea)
            {
              echo "<option value='$linea[idEditorial]'>$linea[editorial]";
            }
            ?>
            <!-- <option value="1">Edebé
            <option value="2">Santillana
            <option value="3">McGraw Hill -->
          </select>
        </td>
      </tr>
      <tr>
        <td>Precio</td>
        <td><input type="number" name="f_precio" id="f_precio"></td>
      </tr>
      <tr>
        <td>Vendido</td>
        <td>
          <select name="f_vendido" id="f_vendido">
            <option value="0">No
            <option value="1">Sí
          </select>
        </td>
      </tr>
      <tr>
        <td>Comentarios</td>
        <td><textarea rows="6" cols="40" name="f_comentarios" id="f_comentarios"></textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="ENVIAR">
        <input type="button" value="LISTADO" onclick="window.open('lstLibros.php', '_parent')"></td>
      </tr>
    </table>
  </form>
 
</body>
</html>