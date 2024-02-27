<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Inicio.php</title>
  </head>
  <body>
    <div class="container">


      <div class="form-group col-4 offset-4">
       
        <img src="./imagenes/logosz.jpg" class="img-fluid">

        
        <form action="login.php" method="post">
        
            <div class="form-row">
            <div class="form-group col-md-12">
              <label>Usuario</label>
              <input type="text" class="form-control" name="f_usuario" id="f_usuario" maxlength="9">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Clave</label>
              <input type="password" class="form-control" name="f_clave" id="f_clave" maxlength="16">
            </div>
          </div>
         
        
          <button type="submit" class="btn btn-primary">ACCEDER</button>
         
          <button type="button" class="btn btn-primary" onclick="window.open('formUsuarios.php','_parent')">REGISTAR</button>
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
