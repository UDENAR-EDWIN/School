<?php
session_start();
  include 'conectar_bd.php';


  // Variables para el control del usuario
  $codigo= $_POST["txt-cod"];
  $pass= $_POST["txt-password"];
  $op= $_POST["rd-tip"];

  if($op == 1){
    // Validación de Estudiantes
    $query = "SELECT * FROM Estudiantes
                      WHERE cod_estudiante='$codigo'";
    $result=mysqli_query($enlace, $query);

    if($est = mysqli_fetch_array($result)){
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
  }
  elseif ($op==2) {
    // Validación de Profesores
    $query = "SELECT * FROM Profesores
                      WHERE cod_profesor='$codigo'";
    $result=mysqli_query($enlace,$query);

    if($est = mysqli_fetch_array($result)){
      if($pass == $est['pass_profesor']){
        $_SESSION['user']=$est['cod_profesor'];
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
  }
  // Cerrar la conexión
  mysqli_close($enlace);
?>
