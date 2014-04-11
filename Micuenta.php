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
    <script href="js/bootstrap-dropdown.js" type="text/javascript"></script>
    <style type="text/css">
  body{
    background-image:url(img/);
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

  <div class="container-fluid">

<div class="container-fluid">

       <div class="col-ig-10 col-xs-20 col-sm-20 col-md-25">
        <div class="page-header">
            <div class="col-lg-6">
            </div>
        </div>
        <!-- /.row -->
    <div class="container">

<div class="hero-unit">
       <div class="col-ig-15 col-xs-20 col-sm-20 col-md-15">
    <div class="row text-center">
              <form method="POST" action="controller/cuenta.php" class="form-horizontal">
                 <fieldset>
                <legend><p class="text-left">Bienvenido, entre en su cuenta</p></legend>
                  <div class="form-group">
                  <label for="inputNombre" class="col-lg-2 control-label">Nombre Usuario</label>
                    <div class="col-lg-6">
                      <input type="text" name="user" class="form-control" id="inputNombre" style="height:40px">
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputContraseña" class="col-lg-2 control-label">Contraseña</label>
                    <div class="col-lg-6">
                      <input type="Numero" name="password" class="form-control" id="inputNumero" style="height:40px">
                    </div>
                  </div>
              
                 <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-2">
                     <input type="hidden" name="action" value="iniciar"> 
                     <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                 </div>
                </fieldset>
              </form>
            </div>
     

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>

</html>


