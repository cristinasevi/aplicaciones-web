<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>01-Basico.php</title>
</head>
<!-- Para ejecutar el ejercicio en el navegador se pone en la barra: localhost/ejercicios y se elige el fichero -->
 <body>
    <h1>Bienvenido a mi página en php</h1>
    <?php
    // Comentario de una línea
    /*
    BLoque de líneas de comentario
    */
    for($c=1;$c<=10;$c++) 
    // Como la variable está en 1, y es menor a 10 se incrementa 1, 1+1=2 como es menor a 10, vuelve a incrementarse hasta llegar a 10
    {
        echo "<h1> $c Bienvenido a mi página en php</h1>";
        // echo es lo que devuleve al interpretar el for
        // $c cuenta el número de veces que aparece el texto, es un contador
    }
    ?>
    <select id="edad" name="edad">
        <?php
        for($c=1;$c<=110;$c++)
        {
            echo "<option value='$c'>$c</option>";
        }
        ?>
    </select>
    <table border="1">
        <tr>
            <?php
            for($c=1;$c<=10;$c++)
            {
                echo "<td>$c</td>";
            }
            ?>
        </tr>
    </table>
    <table border="1">
            <?php
            for($c=1;$c<=10;$c++)
            {
                echo "<tr><td>$c</td></tr>";
            }
            ?>
    </table>
    <table border="1">
        <?php
        for($f=1;$f<=3;$f++)
        {
            echo "<tr>";
            for($c=1;$c<=4;$c++)
            {
                echo "<td>$c</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    $imagenes = Array();
    $imagenes[1]= "./imagenes/captcha/captcha1.jpg";
    $imagenes[2]= "./imagenes/captcha/captcha2.jpg";
    $imagenes[3]= "./imagenes/captcha/captcha3.jpg";
    $imagenes[4]= "./imagenes/captcha/captcha4.jpg";
    echo "<table border='1'><tr>";
    for($c=1;$c<=4;$c++)
    { // Todas las comillas dentro de otras comillas, tienen que ser comillas simples
        echo "<td><img src='$imagenes[$c]' width='100'></td>"; 
    }
    echo "</tr></table>";
    ?>
 </body>
</html>