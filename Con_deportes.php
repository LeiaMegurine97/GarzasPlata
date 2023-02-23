<!-- ?php
  
   session_start();
   error_reporting(0);
   $varsesion = $_SESSION['noCuenta'];

   if ($varsesion == null || $varsesion='') {
    echo 'ERROR!, Es necesario logearse para acceder a esta pagina';
    die();
    }
?-->
<?php
  include('Global/conexion.php');
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

    <link rel="stylesheet" type="txet/css" href="../AlertifyJS/CSS/alertify.css">
    <link rel="stylesheet" type="txet/css" href="../AlertifyJS/CSS/Themes/default.css">

    <title>Control Deportes</title>
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
          <nav class="navbar navbar-expand-lg navbar-light bg-light border_buttom">
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

          <div id="content" >
            <section class="py-3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-9">
                    <h1 class="font-weight-bold mb-0">Deportes </h1>
                    <p class="lead text-muted"> Control de Deportes</p>
                  </div>
                  <div class="col-lg-3"></div>
                </div>
              </div>

            </section>
            <section class="bg-mix">
              <div class="container">
                <div class="card rounded-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4 stat my-3 d-flex">
                        <div class="mx-auto">
                          <h6 class="text-muted">Deportes registrados</h6>
                          <h3 class="font-weight-bold">#0000</h3>
                          </div>
                      </div>
                      <div class="col-lg-4 stat my-3 d-flex">
                        <div class="mx-auto">
                          <h6 class="text-muted">Deportes activos</h6>
                          <h3 class="font-weight-bold">#0000</h3>
                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>00.00%</h6>
                        </div>
                      </div>
                      <div class="col-lg-4 my-3 d-flex">
                        <div class="mx-auto">
                          <h6 class="text-muted">Deportes inactivos</h6>
                          <h3 class="font-weight-bold">#0000</h3>
                          <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>00.00%</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <section class="bg-grey">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 my-3">
                    <div class="card rounded-0">
                      <div class="card-header bg-light">
                        <h4 class="font-weight-bold mb-0">Nuevo deporte</h6>
                      </div>
                      <div class="card-body">
                        <form action="Modelos/Reg_Deporte.php" method="POST">
                          <label for="NomDep" class="text-muted">Nombre del deporte: </label>
                          <input type="text" name="txtNomDep" required> 
                          <label for="TipDep" class="text-muted">Tipo: </label>
                          <label for=""></label>
                          <select name="CboxTipDep" class="select-css" onchange="ShowSelected();">
                            <option value="Individual" selected>Individual</option>  
                            <option value="Equipo">Equipo</option>
                          </select>
                          <label for=""></label>
                          <label for=""></label>
                          <label for="EstDep" class="text-muted">Estado: </label>
                          <label for=""></label>
                          <select name="CboxEstDep" class="select-css"  onchange="ShowSelected();">
                            <option value="Si" selected>Activo</option>  
                            <option value="No">Inactivo</option>
                          </select>
                          <label for=""></label>
                          <label for=""></label>
                          <input type="submit" name="btnAgregar" value="Agregar">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            <!--TABLA DE DEPORTES-->
            <section class="bg-grey">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 my-3">
                    <div class="card rounded-0">
                      <div class="card-header bg-light">
                        <h4 class="font-weight-bold mb-0">Deportes registrados</h6>
                      </div>
                      <div class="card-body">
                      <table id="editableTable" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Estado</th>	
                            <th>Operación</th>												
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query = "SELECT * FROM Deporte";
                            $consulta = sqlsrv_query($conn,$query) or die("database error:". sqlsrv_error($conn));
                            while($mostrar=sqlsrv_fetch_array($consulta)){
                        ?>
                        <tr>
                            <td><?php echo $mostrar ['idDeporte']?></td>
                            <td><?php echo $mostrar ['nombre']?></td>
                            <td><?php echo $mostrar ['tipo']?></td>
                            <td><?php echo $mostrar ['activo']?></td> 
                            <td>
                              <a href="#"><i class="icon ion-md-create"></i></a>
                              <a href="#"><i class="icon btn- ion-md-close-circle-outline"></i></a>
                            </td> 				   				  
                        </tr>
                          <?php 
                              }
                          ?>
                        </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

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