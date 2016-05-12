<!DOCTYPE html>
<?php
  session_start();
  if(@!$_SESSION['user']){
    header('Location:index.php');
  }
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pagina Personal</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="text-align: center;">
  <h1>Bienvenido</h1>
  <a href="php/cerrar_sesion.php"type="button" name="button" class="btn btn-danger">SALIR</a>
</body>
</html>
