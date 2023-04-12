<?php
session_start();
include('conexion/config.php');
if (isset($_SESSION['emailUser']) != "") {
  $nameUser      = $_SESSION['nameUser'];
  $email         = $_SESSION['emailUser'];
?>

  <!doctype html>
  <html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="assets/perfil.jpeg">
    <title>Inicio :: <?php echo $nameUser; ?></title>
  </head>

  <body>
    <nav class="navbar navbar-light bg-light mb-5" style="background-color: #f7c600 !important;">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://blogangular-c7858.web.app" style="color:#fff;">
          <strong style="color:#333;">Canal WebDeveloper</strong>
        </a>
        <span><a href="salirSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>
      </div>
    </nav>


    <div class="container">

      <?php
      if (isset($_REQUEST['c'])) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Felicitaciones!</strong> Acaba de iniciar sesión correctamente..
        </div>
      <?php } ?>


      <div class="row text-center">
        <div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
          <p>Hola ya estas logueado, <strong><?php echo $nameUser; ?></strong></p>
          <p>Mi correo es <strong><?php echo $email; ?></strong></p>
          <hr>
        </div>
      </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>

  </html>

<?php
} else { ?>
  <script type="text/javascript">
    location.href = "index.php";
  </script>
<?php }
?>
