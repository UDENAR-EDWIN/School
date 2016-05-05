<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>School</title>
  <!-- Elementos CSS para el diseño -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
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
            <li class="active"><a href="#">Inicio</a></li>
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
  <div class="jumbotron">
    <div class="container">
      <h1>Universidad de Nariño</h1>
      <h2>Construyendo el Futuro</h2>
      <button type="button" id="btn_login" class="btn btn-primary login-button btn-lg" data-toggle="modal" data-target="#mod-login">INGRESAR</button>
    </div>
  </div>
  <div class="container">
    <div class="pl pl-student col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2">
      <div class="pl-img"><img src="images/student.png" class="img-responsive center-block" alt="Imagen responsive"></div>
      <h3>Estudiantes</h3>
      <p>Formulario de registro para los estudiantes pertenecientes a la Universidad de Nariño</p>
      <a href="estudiante-reg.html" id="btn-regStd" class="btn btn-success">REGISTRAR</a>
    </div>
    <div class="pl pl-teacher col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-2">
      <div class="pl-img"><img src="images/teacher.png" class="img-responsive center-block" alt="Imagen responsive"></div>
      <h3 class="title-teach">Profesores</h3>
      <p>Formulario de registro para los profesores pertenecientes a la Universidad de Nariño</p>
      <a href="profesor-reg.html" id="btn-regTeach" class="btn btn-success">REGISTRAR</a>
    </div>
  </div>
  <!-- Ventana para el Logeo de usuarios -->
  <div class="modal fade mod-contorn" id="mod-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content login-dialog">
        <!-- Cabecera de la ventana de Login -->
        <div class="modal-header login-header">
          <button type="button" class="close login-btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title login-title" id="myModalLabel">Login</h4>
        </div>
        <!-- Cuerpo de la ventana de Login -->
        <div class="modal-body">
          <form class="login-form" action="php/login.php" method="post">
            <div class="form-group">
              <label for="txt-cod">Codigo: </label>
              <input type="number" id="txt-cod" placeholder="Codigo de Usuario" class="form-control" name="txt-cod">
            </div>
            <div class="form-group">
              <label for="txt-password">Contraseña: </label>
              <input type="password" id="txt-password" placeholder="Contraseña" class="form-control" name="txt-password">
            </div>
            <div class="form-group"> <!-- Tipo de Usuario -->
              <label for="rd-tip">Tipo de Usuario:</label>
              <div class="radio">
                <label><input type="radio" name="rd-tip" value="1" checked="checked">Estudiante</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="rd-tip" value="2">Profesor</label>
              </div>
            </div>
            <!-- Footer de la ventana de Login -->
            <div class="modal-footer login-footer">
              <button type="submit" class="btn btn-primary">INGRESAR</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="container-fluid">
    <span>Copyright (c) 2015 Copyright Holder All Rights Reserved.</span>
  </footer>
  <!-- Elementos JavaScirpt para la interactividad-->
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
