<?php
//Conexion BD 
  $conexion=mysql_connect("localhost", "root", "");
  $bd=mysql_select_db("perritos");

//Peticion datos
  $peticion= "SELECT * FROM mascota Where id =". $id;
  $result=mysql_query($peticion);
  
  $fila = mysql_fetch_array($result);

  $name = $fila[1];
  $password = $fila[2];
?>

<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <style type="text/css">
  body{
    background-image:url(img/);
  }

</style>
	<title></title>

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

        <div class="row text-center">

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/pastoraleman.jpg" alt="">
                    <div class="caption">
                    </div>
                </div>
            </div>
              <form method="POST" action="controller/mascota.php" class="form-horizontal">
               <fieldset>
                  <legend>Actualizar Perfil</legend>
                  <div class="form-group">
                  <label for="inputNombre" class="col-lg-2 control-label">Nombre Mascota</label>
                    <div class="col-lg-8">
                      <input type="text" name="name" class="form-control" id="inputNombre" style="height:40px">
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputE-mail" class="col-lg-2 control-label">Numero de Identificaciòn del Dueño</label>
                    <div class="col-lg-8">
                      <input type="number" name="identification" class="form-control" id="inputNumero" style="height:40px">
                    </div>
                  </div>
               <div class="form-group">
                   <label for="inputE-text" class="col-lg-2 control-label">Raza Mascota</label>
                    <div class="col-lg-8">
                      <input type="text" name="type" class="form-control" id="inputtext" style="height:40px">
                    </div>
                  </div>
                    <div class="form-group">
                  <label for="inputEdad" class="col-lg-2 control-label">Edad Mascota</label>

                    <div class="col-lg-8">
                      <input type="number" name="age" class="form-control" id="inputEdad" style="width=20px">
                    </div>
                  </div>
                  <input type="hidden" name="action" value="editar">
                  <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

                  <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-2">
                      <label for="ejemplo_archivo_1"></label>
                      <input type="file" name="image" id="ejemplo_archivo_1">
                  </div>
                  <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-2">
                     <button type="submit" class="btn btn-primary" href="">Actualizar</button>
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
