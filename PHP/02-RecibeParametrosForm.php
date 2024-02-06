<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>02-RecibeParametrosForm.php</title>
</head>
 <body>
    <?php
    echo "El usuario es $_POST[usu] y el password es $_POST[cla] <br>";
    echo "<a href='02-EnvioParametrosForm.php'>Volver</a>";
    ?>
    <?php
    echo "El usuario es ".$_POST['usu']." y el password es ".$_POST['cla']."<br>";
    echo "<a href='02-EnvioParametrosForm.php'>Volver</a>";
    ?>
    <?php
    $usuario=$_POST['usu'];
    $clave=$_POST['cla'];
    echo "El usuario es $usuario y el password es $clave <br>";
    echo "<a href='02-EnvioParametrosForm.php'>Volver</a>";
    ?>
 </body>
</html>

