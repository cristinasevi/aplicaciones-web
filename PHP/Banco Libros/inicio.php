<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Inicio.php</title>
</head>
<body>
<form action="login.php" method="post">
    <table align="center" width="40%">
        <tr>
            <td>Usuario</td>
            <td><input type="text" name="f_usuario" id="f_usuario" maxlength="9"></td>
        </tr>
        <tr>
            <td>Clave</td>
            <td><input type="password" name="f_clave" id="f_clave" maxlength="16"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="ACCEDER">
                <input type="button" value="REGISTRAR" onclick="window.open('formUsuarios.php','_parent')">
            </td>
        </tr>
    </table>
</form>
</body>
</html>