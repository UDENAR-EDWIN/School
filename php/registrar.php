<?php
session_start();
  require("conectar_bd.php");

  // Bandera para determinar si es Profesor o Estudiante
  $op= $_GET["op"];

  if($op){
    if($op==1){
      // Variables para el control del Estudiante
      $descripcion= $_POST["txt-description"];
      $nombres= $_POST["txt-name"];
      $apellidos= $_POST["txt-sname"];
      $codigo= $_POST["txt-cod"];
      $facultad= $_POST["sl-fact"];
      $tipoID= $_POST["sl-id"];
      $docID= $_POST["txt-id"];
      $celular= $_POST["txt-cel"];
      $genero= $_POST["rd-gen"];
      $pass= $_POST["txt-pass"];

      // Validación de Usuarios Existentes
      $query = "SELECT * FROM Estudiantes
                        WHERE cod_estudiante='$codigo'";
      $result=mysql_query($query);

      if(!$est = mysql_fetch_array($result)){
        $query = "INSERT INTO Estudiantes (cod_estudiante, pass_estudiante,
                              nom_estudiante, ape_estudiante, fac_estudiante,
                              tipoID_estudiante, docID_estudiante, cel_estudiante,
                              gen_estudiante, des_estudiante)
                              VALUES ('$codigo', '$pass', '$nombres',
                                      '$apellidos', '$facultad', '$tipoID',
                                      '$docID', '$celular', '$genero', '$descripcion');";
        mysql_query($query);
        session_start();
        $_SESSION['user']=$est['cod_estudiante'];
        header('Location: ../personal.php');
      }
      else{
        echo "<script>alert('Este usuario ya existe, Porfavor registrese con otro Usuario');</script>";
        echo "<script>location.href='../estudiante-reg.html'</script>";
      }
    }
    else if ($op ==2){
      // Variables para el control del Estudiante
      $descripcion= $_POST["txt-description"];
      $nombres= $_POST["txt-name"];
      $apellidos= $_POST["txt-sname"];
      $codigo= $_POST["txt-cod"];
      $facultad= $_POST["sl-fact"];
      $tipoID= $_POST["sl-id"];
      $docID= $_POST["txt-id"];
      $celular= $_POST["txt-cel"];
      $genero= $_POST["rd-gen"];
      $pass= $_POST["txt-pass"];
      $especialidad = $_POST["txt-esp"];
      // Validación de Usuarios Existentes
      $query = "SELECT * FROM Profesores
                        WHERE cod_profesor='$codigo'";
      $result=mysql_query($query);

      if(!$est = mysql_fetch_array($result)){
        $query = "INSERT INTO Profesores (cod_profesor, pass_profesor,
                              nom_profesor, ape_profesor, fac_profesor,
                              tipoID_profesor, docID_profesor, cel_profesor,
                              gen_profesor, des_profesor, esp_profesor)
                              VALUES ('$codigo', '$pass', '$nombres',
                                      '$apellidos', '$facultad', '$tipoID',
                                      '$docID', '$celular', '$genero', '$descripcion',
                                      '$especialidad');";
        mysql_query($query);
        session_start();
        $_SESSION['user']=$est['cod_profesor'];
        header('Location: ../personal.php');
      }
      else{
        echo "<script>alert('Este usuario ya existe, Porfavor registrese con otro Usuario');</script>";
        echo "<script>location.href='../estudiante-reg.html'</script>";
      }
    }
    else {
      echo "<script>alert('No se puede determinar si es Estudiante o Profesor');</script>";
      echo "<script>location.href='../estudiante-reg.html'</script>";
    }
  }
  // Cerrar la conexión
  mysql_close($link);
?>
