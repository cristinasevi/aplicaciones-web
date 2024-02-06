<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>02-EnvioParametrosForm.php</title>
</head>
 <body>
    <form action="02-RecibeParametrosForm.php" method="post"> <!-- method="post" -> el usuario no ve como se transladan los datos -->
        <table border="1" align="center">
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="usu" id="usu"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="cla" id="cla"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="ENVIAR">
                </td>
            </tr>
        </table>
    </form>
 </body>
</html>