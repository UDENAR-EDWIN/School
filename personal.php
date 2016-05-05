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
</head>
<body>
  <h1>Bienvenido</h1>
</body>
</html>
