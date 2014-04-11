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
    <link href="jumbotron-narrow.css" rel="stylesheet">
    <script href="js/bootstrap-dropdown.js" type="text/javascript" ></script>
    <script type="text/javascript"></script>
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



<div class="container">

        <div class="row text-center">

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/imagen5.jpg" alt="">
                    <div class="caption">
                    </div>
                </div>
            </div>
              <form class="form-horizontal">
               <fieldset>
                  <legend>Oferta mascota</legend>
                  <div class="form-group">
                  <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" id="inputNombre" style="height:40px">
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputE-mail" class="col-lg-2 control-label">Raza</label>
                    <div class="col-lg-8">
                      <input type="Numero" class="form-control" id="inputNumero" style="height:40px">
                    </div>
                  </div>
                 
                 
                 <div class="form-group">
                   <label for="input-text" class="col-lg-2 control-label">Descriciòn</label>
                    <div class="col-lg-8">
                    <textarea class="form-control" rows="3"></textarea>
                      </div>
                      </div>

                  <div class="form-group">
                    <label for="input-text" class="col-lg-2 control-label">Ubicacion</label>
                    <div class="col-lg-8">
                      <textarea class="form-control" rows="3"></textarea>
                      </div>
                      </div>

                  <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-2">
                     <a class="btn btn-primary" href="">Aceptar</a>
                   </div>
                  </div>
                </fieldset>
              </form>
            </div>
   

      



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