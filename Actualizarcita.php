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
<div class="hero-unit">
       <div class="col-ig-25 col-xs-50 col-sm-60 col-md-25">
        <div class="page-header">
     
 <div class="well">
 <div class="row">
            <div class="col-lg-6">
            </div>
        </div>
        <!-- /.row -->


  <div class="container">

<div class="hero-unit">
       <div class="col-ig-15 col-xs-20 col-sm-20 col-md-15">
    <div class="row text-center">
              <form class="form-horizontal">
                 <fieldset>
                <legend><p class="text-left">Actualizar Cita</p></legend>
                  <div class="form-group">
                  <label for="inputNombre" class="col-lg-2 control-label">Nombre y Apellidos</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="inputNombre" style="height:40px">
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputTelefono" class="col-lg-2 control-label">Telèfono</label>
                    <div class="col-lg-6">
                      <input type="Numero" class="form-control" id="inputNumero" style="height:40px">
                    </div>
                  </div>
               <div class="form-group">
                   <label for="inputE-text" class="col-lg-2 control-label">Especie</label>
                    <div class="col-lg-6">
                      <select class="form-control" id="inputtext" style="height:40px">
                        <option></option>
                        <option>Perro</option>
                        <option>Gato</option>
                      </select>  
                    </div>
                  </div>
                    <div class="form-group">
                  <label for="inputEdad" class="col-lg-2 control-label">Nombre Mascota</label>
                    <div class="col-lg-6">
                      <input type="Edad" class="form-control" id="inputEdad" style="width=20px">
                 <div class="checkbox">
                   <label>
                      <input type="checkbox"><p class="text-left">Lunes</p>
                      <input type="checkbox"><p class="text-left">Martes</p>
                      <input type="checkbox"><p class="text-left">Miercoles</p>
                      <input type="checkbox"><p class="text-left">Jueves</p>
                      <input type="checkbox"><p class="text-left">Viernes</p>
                      <input  type="checkbox"><p class="text-left">Sabado</p>
                  </label>
               </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-2">
                     <a class="btn btn-primary" href="">Enviar</a>
                   </div>
                  </div>
                </fieldset>
              </form>
            </div>
     

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>

</html>