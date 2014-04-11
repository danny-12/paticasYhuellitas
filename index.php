<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <script href="js/bootstrap-dropdown.js" type="text/javascript" ></script>
    <script type="text/javascript"></script>
 
    <style type="text/css">
  body{
    background-image:url(img/Fondo-4.jpg);
  }

</style>
</head>

<body>


   <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                <?php session_start();
                if(!empty($_SESSION["user"])){
                           echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="crearMascota.php">Crear Mascota</a>
                            </li>
                            <li><a href="verMascota.php">Ver</a></li>
                            </ul>
                            <li><a href="EnfermedadesFrecuentes.php">Enfermedades frecuentes</a></li>
                            <li><a href="Cuidadodenuestrasmascota.php">Cuidado de la Mascota</a></li>
                            </li>';
                          }
                        ?>    

                  <?php if(!empty($_SESSION["user"])){
                                  echo '<li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pedir cita
                                  <b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                  <li><a href="Actualizarcita.php">Actualizar cita</a>
                                  </li>                  
                                  </ul>';
                  }
                  ?>    
                    <li><a href="Listadorazas.php">Razas</a>
                    <li><a href="servicios.php">Servicios</a>
                               <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta
                                  <b class="caret"></b></a><ul class="dropdown-menu">
                                  <li><a href="Micuenta.php">cuenta</a></li>
                               </li>
                  <?php
                     if(!empty($_SESSION["user"])){
                            echo '<li><a href="Editarcuenta.php">Editar cuenta</a></li></li>';
                            echo '<li><a href="controller/cuenta.php?action=cerrar">Cerrar Sesión</a></li></ul>';
                            }
                  ?> 

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php
    if(!empty($_SESSION["user"])){
      echo '<div class="nav navbar-right">
            <a style="padding: 12px 5px; margin-top: 2px; margin-right: 3px"class="btn btn-danger">
            Bienvenido</a></div>';
          }    
     else{
           echo '<div class="nav navbar-right">
            <a style="padding: 12px 5px; margin-top: 2px; margin-right: 3px" data-toggle="modal" href="#myModal" 
            class="btn btn-danger">Cuenta usuario</a></div>';
         }?>

        </div>
            </div>
            <!-- /.navbar-collapse -->
    <!-- /.container -->
    </nav>

    <div class="container">

        <div class="jumbotron hero-spacer" style="background-color: #FFFFFF">
            <h1>Bienvenidos!</h1>
            <p> Aquí podrás encontrar información sobre nuestra querida mascota:</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3></h3>
            </div>
        </div>
        <!-- /.row -->

        <div class="row text-center">

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/chau chau.jpg" alt="">
                    <div class="caption">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/aleman.jpg" alt="">
                    <div class="caption">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/cachoros.jpg" alt="">
                    <div class="caption">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/mascota.jpg" alt="">
                    <div class="caption">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1></h1>
      </div>
    </div>

    <div id="footer">
      <div class="container">
      <p>Daniel montoya zuluaga</p>

      </div>
    </div>


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>
</html>

<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
         <div class="row text-center">
              <form class="form-horizontal" method="POST" action="controller/cuenta.php">
               <fieldset>
                  <legend>Crear Nueva Cuenta de Usuario</legend>
                  <div class="form-group">
                  <label for="inputNombre" class="col-lg-2 control-label">Nombre usuario</label>
                    <div class="col-lg-8">
                      <input type="text" name="user" class="form-control" id="inputNombre">
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputtext" class="col-lg-2 control-label">Contraseña</label>
                    <div class="col-lg-8">
                      <input type="text" name="password" class="form-control" id="inputtext">
                    </div>
                  </div>
               <div class="form-group">
                   <label for="inputE-mail" class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-8">
                      <input type="text" name="email" class="form-control" id="inputE-mail">
                    </div>
                  </div>
                   <input type="hidden" name="action" value="crear">     
                   <button type="submit" class="btn btn-info">Crear</button>
                </fieldset>
              </form>
            </div>
     
        </div>
                  
      </div>
    </div>
</div>

