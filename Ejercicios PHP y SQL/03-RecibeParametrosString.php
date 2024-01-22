<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>03-RecibeParametrosString.php</title>
</head>
 <body>
    <?php
    echo "El usuario es $_GET[usuario] y el curso es $_GET[curso] <br>";
    echo "<a href='03-EnvioParametrosString.php'>Volver</a>";
    ?>
    <?php
    echo "El usuario es ".$_GET['usuario']." y el curso es ".$_GET['curso']." <br>";
    echo "<a href='03-EnvioParametrosString.php'>Volver</a>";
    ?>
    <?php
    $usuario=$_GET['usuario'];
    $curso=$_GET['curso'];
    echo "El usuario es $_GET[usuario] y el curso es $_GET[curso] <br>";
    echo "<a href='03-EnvioParametrosString.php'>Volver</a>";
    ?>
 </body>
</html>