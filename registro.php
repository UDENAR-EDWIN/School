<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Registro de Estudiantes</title>
  <!-- Elementos CSS para el diseño -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style-reg.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <!-- Boton tipo Hamburguesa para tamaños de pantalla pequeños -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
            <span class="sr-only">MENU</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Icono de nuestra barra de navegación -->
          <a href="index.html" class="navbar-brand">
            <span class="glyphicon glyphicon-education icono-school"></span>
            <span class="title">Academy Student</span>
          </a>
        </div>
        <!-- Elementos de nuestra barra de Navegación -->
        <div class="collapse navbar-collapse" id="navbar-1">
          <!-- Item para Busquedas -->
          <form action="" class="navbar-form navbar-right form-horizontal" role="search">
            <div class="form-group">
              <div class="col-xs-10">
                <input type="text" class="form-control" placeholder="Buscar">
              </div>
              <button type="button" class="btn btn-primary col-xs-2"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </form>
          <!-- Items principales de la Barra de Navegación -->
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="#">Información</a></li>
            <!-- Lista desplegable -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Articulos <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Deportes</a></li>
                <li><a href="#">Salud</a></li>
                <li class="divider"></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Finanzas</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="jumbotron cont-wallp">
    <figure class="container-fluid cont-wallp">
      <img src="images/user_fond.png" alt="Fondo del Usuario" class="img-responsive center-block wallpaper-user" id="img-wallpaper" name="imgWall"/>
    </figure>
    <div class="container-fluid">
      <figure class="col-xs-8"><img src="images/img_user.png" alt="Imagen de Usuario" class="img-responsive img-circle img-user col-xs-offset-1"/ id="img-user1"></figure>
      <div class="div-file div-position col-xs-1 col-xs-offset-7 col-sm-offset-9 col-md-offset-10">
        <span class="txt-button">CAMBIAR FONDO</span>
        <input type="file" class="button-img" id="imgWall" name="imgWall"/>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <header class="col-md-12 title-form">
        <h1>Registro de Usuarios</h1>
      </header>
    </div>
    <?php
      $env=1;
      if(isset($_GET['op'])){
        $opc= $_GET['op'];
        if($opc == 2) $env=2;
      }
    ?>
    <form enctype="multipart/form-data" action="php/registrar.php?op=<?php echo $env ?>" method="post" onsubmit="return validacion()">
      <!-- Descripción Personal -->
      <div class="col-sm-12 col-md-4 personal-description" id="pers-descript">
          <!-- Foto personal -->
          <div class="col-sm-4 col-md-12 pl-person">
            <!-- <div class="img-person"></div> -->
            <figure><img src="images/user1.png" alt="Imagen de Usuario" class="img-responsive img-circle center-block img-person" id="img-usuario" /></figure>
            <div class="div-file center-block">
              <span class="txt-button">SUBIR</span>
              <input type="file" class="button-img" id="imgInp" name="imgInp"/>
            </div>
          </div>
          <!-- Información extra del Usuario -->
          <div class="col-sm-8 col-md-12 form-group" id='info-ext'>
              <label for="txt-description" class="control-label">Descripción Personal</label>
              <textarea rows="9" placeholder="Comentanos más de ti.. :)" id="txt-description" class="form-control" name="txt-description"></textarea>
              <span class="txt-help"></span>
          </div>
      </div>
      <!-- Descripción General -->
      <div class="col-sm-12 col-md-7 personal-form">
        <div class="form-group elm"> <!-- Nombres del Usuario -->
          <label for="txt-name" class="control-label">Nombres: </label>
          <input type="text" id="txt-name" placeholder="Nombres completos porfavor" class="form-control" name="txt-name">
          <span class="txt-help"></span>
        </div>
        <div class="form-group elm"> <!-- Apellidos del Usuario -->
          <label for="txt-sname" class="control-label">Apellidos: </label>
          <input type="text" id="txt-sname" placeholder="Apellidos completos porfavor" class="form-control" name="txt-sname">
          <span class="txt-help"></span>
        </div>
        <div class="form-group col-md-6 elm"> <!-- Codigo del Usuario -->
          <label for="txt-cod" class="control-label">Codigo: </label>
          <input type="number" id="txt-cod" placeholder="Codigo Estudiantil" class="form-control" name="txt-cod">
          <span class="txt-help"></span>
        </div>
        <div class="form-group col-md-6 elm"> <!--Numero Celular-->
          <label for="txt-cel" class="control-label">Celular: </label>
          <input type="number" id="txt-cel" placeholder="Numero Celular" class="form-control" name="txt-cel">
          <span class="txt-help"></span>
        </div>
        <div class="form-group elm"> <!--Facultad del Usuario-->
          <label for="sl-fact" class="control-label">Facultad: </label>
          <select class="form-control" id="sl-fact" name="sl-fact">
            <option>Ingeniería</option>
            <option>Economia</option>
            <option>Derecho</option>
          </select>
        </div>
        <div class="form-group col-md-6 elm"> <!--Tipo de Documento de Identidad-->
          <label for="type-id" class="control-label">Tipo ID: </label>
          <select class="form-control" id="type-id" name="sl-id">
            <option>Cedula</option>
            <option>Tarjeta de Identidad</option>
            <option>Pasaporte</option>
          </select>
        </div>
        <div class="form-group col-md-6 elm"> <!--Numero de Documento de Identidad-->
          <label for="txt-id" class="control-label">Documento ID: </label>
          <input type="number" id="txt-id" placeholder="Documento de Identidad" class="form-control" name="txt-id">
          <span class="txt-help"></span>
        </div>
        <div class="form-group elm" id="rdg-gen"> <!-- Genero del Usuario -->
          <label for="optradio" class="control-label">Genero:</label>
          <div class="radio">
            <label><input type="radio" name="rd-gen" value="Femenino">Femenino</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="rd-gen" value="Masculino">Masculino</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="rd-gen" value="Otro" checked="checked">Otro</label>
          </div>
          <span class="txt-help"></span>
        </div>
        <div class="form-group elm hide"> <!--Especialidad del Profesor-->
          <label for="txt-esp" class="control-label">Especialidad: </label>
          <input type="text" id="txt-esp" placeholder="Area de Especialidad" class="form-control" name="txt-esp">
          <span class="txt-help"></span>
        </div>
        <div class="form-group elm"> <!-- Contraseña del Usuario -->
          <label for="txt-pass" class="control-label">Contraseña: </label>
          <input type="password" id="txt-pass" placeholder="Contraseña Porfavor" class="form-control" name="txt-pass">
          <span class="txt-help"></span>
        </div>
        <button type="submit" name="btn-reg" class="btn btn-primary center-block">REGISTRAR</button>
    </form>
  </div>
  <!-- Elementos JavaScirpt para la interactividad-->
  <script src="js/inicio.js" type="text/javascript"></script>
  <script src="js/valid-form.js"type="text/javascript"></script>
  <script src="js/open-img.js" type="text/javascript"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
