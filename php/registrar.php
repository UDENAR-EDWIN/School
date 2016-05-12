<?php
session_start();
  require("conectar_bd.php");

  // Bandera para determinar si es Profesor o Estudiante
  if(isset($_GET['op'])){
    $op= $_GET['op'];
  }
  else header('Location: ../registro.php');

  // Variables de control general
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

  if($op==1){
    // Validación de Usuarios Existentes
    $query = "SELECT * FROM Estudiantes
                      WHERE cod_estudiante='$codigo'";
    $result=mysql_query($query);

    if(!$est = mysql_fetch_array($result)){

      $img_path = "user-images/";
      $img_path = $img_path . basename( $_FILES['imgInp']['name']);
      if(!move_uploaded_file($_FILES['imgInp']['tmp_name'], "../".$img_path)){
        $img_path ="user-images/user.png";
      }

      $wall_path = "user-images/";
      $wall_path = $wall_path . basename( $_FILES['imgWall']['name']);
      if(!move_uploaded_file($_FILES['imgWall']['tmp_name'], "../".$wall_path)){
        $wall_path ="user-images/user-wall.png";
      }

      $query = "INSERT INTO Estudiantes (cod_estudiante, pass_estudiante,
                            nom_estudiante, ape_estudiante, fac_estudiante,
                            tipoID_estudiante, docID_estudiante, cel_estudiante,
                            gen_estudiante, des_estudiante, img_estudiante,
                            wall_estudiante)
                            VALUES ('$codigo', '$pass', '$nombres',
                                    '$apellidos', '$facultad', '$tipoID',
                                    '$docID', '$celular', '$genero', '$descripcion',
                                    '$img_path', '$wall_path');";
      mysql_query($query);
      session_start();
      $_SESSION['user']=$codigo;
      header('Location: ../personal.php');
    }
    else{
      echo "<script>alert('Este usuario ya existe, Porfavor registrese con otro Usuario');</script>";
      echo "<script>location.href='../estudiante-reg.html'</script>";
    }
  }
  else if ($op ==2){
    $especialidad = $_POST["txt-esp"];
    // Validación de Usuarios Existentes
    $query = "SELECT * FROM Profesores
                      WHERE cod_profesor='$codigo'";
    $result=mysql_query($query);

    if(!$est = mysql_fetch_array($result)){

      $img_path = "user-images/";
      $img_path = $img_path . basename( $_FILES['imgInp']['name']);
      if(!move_uploaded_file($_FILES['imgInp']['tmp_name'], "../".$img_path)){
        $img_path ="user-images/user.png";
      }

      $wall_path = "user-images/";
      $wall_path = $wall_path . basename( $_FILES['imgWall']['name']);
      if(!move_uploaded_file($_FILES['imgWall']['tmp_name'], "../".$wall_path)){
        $wall_path ="user-images/user-wall.png";
      }

      $query = "INSERT INTO Profesores (cod_profesor, pass_profesor,
                            nom_profesor, ape_profesor, fac_profesor,
                            tipoID_profesor, docID_profesor, cel_profesor,
                            gen_profesor, des_profesor, esp_profesor,
                            img_profesor, wall_profesor)
                            VALUES ('$codigo', '$pass', '$nombres',
                                    '$apellidos', '$facultad', '$tipoID',
                                    '$docID', '$celular', '$genero', '$descripcion',
                                    '$especialidad', '$img_path', '$wall_path');";
      mysql_query($query);
      session_start();
      $_SESSION['user']=$codigo;
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
  // Cerrar la conexión
  mysql_close($link);
?>
