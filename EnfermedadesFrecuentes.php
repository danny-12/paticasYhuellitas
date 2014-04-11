<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<title></title>
	 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
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


<div class="container">
  <h1>Enfermedades Frecuentes</h1>
  <div class="panel panel-primary">
    <div class="panel-heading">El ojo seco en los perros</div>
    <div class="panel-body"><p>Al igual que las personas una de las principales enfermedades oculares crónicas es la presencia del “ojo seco”, denominada médicamente como queratoconjuntivitis seca (QCS) o queratoconjuntivitis seca cuantitativa. Las interrogantes y respuesta de esta enfermedad<p/></div>
  </div>

  <div class="panel panel-success">
    <div class="panel-heading"><p>Infecciones, Vacunas y Tratamientos</div>
    <div class="panel-body">Las infecciones de origen viral, bacteriano u ocasionadas por hongos son otras de las patologías que suelen afectar a las mascotas, las que pueden ser prevenidas y tratadas eficazmente mediante vacunas o medicamentos</p></div>
  </div>

  <div class="panel panel-warning">
    <div class="panel-heading">Parásitos Internos</div>
    <div class="panel-body">Los Parásitos internos o endoparásitos viven dentro del animal (hospedador) y le ocasionarán una infección parasitaria. Los más frecuentes son los gusanos redondos y los gusanos planos (lombrices y tenias). 

    <h4>¿Qué daños causan los parásitos internos (gusanos) a las mascotas?</h4>

Pueden causar daños de intensidad variable, según el grado de parasitación. Estos daños comprenden una lesión a los tejidos donde está situado el parásito, obstrucción del intestino o de los conductos biliares, sustracción de sangre y de otros elementos vitales para la adecuada nutrición del animal, como son las vitaminas y minerales e, incluso, alterar el sistema inmunológico.</div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading">CORONAVIROSI</div>
    <div class="panel-body">Como el nombre lo indica, es una enfermedad provocada por un Coronavirus que afecta al sistema gastrointestinal de los cachorritos. Suele ser una enfermedad leve aunque en animales de menos de 2 meses puede transformarse en grave debido a las pocas defensas que ellos poseen. La principal complicación es la deshidratación que puede provocar por los vómitos y diarrea que provoca.</div>
  </div>

 














  <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>