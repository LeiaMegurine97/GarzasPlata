<?php
  
   session_start();
   error_reporting(0);
   $varsesion = $_SESSION['noCuenta'];

   if ($varsesion == null || $varsesion='') {
    echo 'ERROR!, Es necesario logearse para acceder a esta pagina';
    die();
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    
    <!-- Libreria de iconos-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Acceso a la Hoja de estilos-->
    <link rel="stylesheet" href="CSS/style.css">

    
    
    <title>Pagina principal</title>
  </head>
  <body>
    <div id="contenedor">
      <div class="d-flex">
          
          <div id="sidebar-container" class="bg-primary">
              <div class="logo">
                  <h4 class="text-light font-weight-bold">Garzas de Plata</h4>
              </div>
          
              <div class="menu">
                  <a href="#" class="d-block text-light p-3"><i class="icon ion-md-apps mr-2 lead"></i>Tablero</a>
                  <a href="#" class="d-block text-light p-3"><i class="icon ion-md-people mr-2 lead"></i>Usuarios</a>
                  <a href="#" class="d-block text-light p-3"><i class="ion-md-clipboard mr-2 lead"></i>Registros</a>
                  <a href="#" class="d-block text-light p-3"><i class="icon ion-md-person mr-2 lead"></i>Perfil</a>
                  <a href="#" class="d-block text-light p-3"><i class="icon ion-md-settings mr-2 lead"></i>Configuración</a>
              </div>
          </div>
      

      <div class="w-75">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-buttom">
            <div class="container">  
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <form class="form-inline position-relative my-2 d-inline-block">
                  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-search position-absolute " type="submit"><i class="icon ion-md-search"></i></button>
              </form>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="Imagenes/Garza.png" class="img-fluid rounded-circle mr-2 avatar">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#"><i class="icon ion-md-person mr-2 lead"></i>Perfil</a>
                      <a class="dropdown-item" href="#"><i class="icon ion-md-build mr-2 lead"></i>Preferencias</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="Modelos/cerrar_session.php"><i class="icon ion-md-power mr-2 lead"></i>Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="JS/jquery-3.4.1.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
  </body>
</html>