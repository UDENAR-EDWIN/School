<?php
session_start();
  require("conectar_bd.php");

  // Variables para el control del usuario
  $codigo= $_POST["txt-cod"];
  $pass= $_POST["txt-password"];

  // Validación de Usuarios
  $query = "SELECT * FROM Estudiantes
                    WHERE cod_estudiante='$codigo'";
  $result=mysql_query($query);

  if($est = mysql_fetch_array($result)){
    if($pass == $est['pass_estudiante']){
      $_SESSION['user']=$est['cod_estudiante'];
      header('Location: ../personal.php');
    }
    else{
      echo "<script>alert('Contraseña Incorrecta');</script>";
      echo "<script>location.href='../index.php'</script>";
    }
  }
  else{
    echo "<script>alert('Este usuario no existe, Porfavor registrese para poder ingresar');</script>";
    echo "<script>location.href='../index.php'</script>";
  }
  // Cerrar la conexión
  mysql_close($link);
?>
