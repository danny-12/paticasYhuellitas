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
    <link href="sticky-footer-navbar.css" rel="stylesheet">
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
     <div class="row">
            <div class="col-lg-12">
                <h3></h3>
            </div>
        </div>
        <!-- /.row -->

      <div class="media">
  <a class="pull-left">
    <img class="media-object" src="img/perros-8.jpg"alt="...">
  </a>
  <div class="media-body">
    
    <h2>Baño y peluquería se tiene en cuenta:</h2>
  <ul class="list-unstyled">
  <li>Baño anti-pulgas.</li>
  <li>Corte de pelo.</li>
  <li>Limpieza de oídos.</li>
  <li>Cepillado de dientes</li>
  <li>Corte de uñas.</li>
  <li>Drenaje de glándulas adanales para reducir el olor en la mascota.</li>
 <ul>
    <hr>
  </div>
</div>

   
 <div class="media">
  <a class="pull-left">
    <img class="media-object" src="img/dental.jpg"alt="...">
  </a>
  <div class="media-body">
    
    <h2>Salud dental</h2>
     <p>Prevenga los problemas dentales de su mascota antes de que se manifiesten. Tráigala a la clínica para un control dental por lo menos una vez por año. En Cachorros, contamos con los elementos necesarios para hacer limpiezas dentales, extracción del sarro y revitalizar la salud de las encías de su mascota.Cuidar los dientes de tu perro es muy importante para ayudar a mantener su salud. Mucha gente no se da cuenta de esto y simplemente deja que sus perros pasen toda la vida sin siquiera una simple inspección dental.</p> 
     <hr>
  </div>
</div>

<div class="media">
  <a class="pull-left">
    <img class="media-object" src="img/imagen1.jpg"alt="...">
  </a>
  <div class="media-body">
    
    <h2>Atención domiciliaria</h2>
     <p>En las Clínicas Veterinarias Cachorros ofrecemos un servicio de atención veterinario a domicilio. Solicite una consulta en su casa por teléfono. Estaremos encantados de ir a visitar a su mascota tan pronto como nos sea posible..</p> 
     <hr>
  </div>
</div>


<div class="media">
  <a class="pull-left">
    <img class="media-object" src="img/imagen2.jpg"alt="...">
  </a>
  <div class="media-body"><h2>Vacunación</h2>
     <p>Cuando un cachorro toma leche materna recibe anticuerpos contra varias enfermedades, según el estado de las defensas de la madre. Estos se mantienen en la circulación del cachorro durante un tiempo y le sirven de protección, pero se van destruyendo y hacia los 45 días, en promedio, ya no son suficientes para prevenir contagios. Es a partir de esta edad que comienzan a aplicarse las primeras dosis de vacunas para suplir a los anticuerpos maternos.</p> 

    <p>Son necesarias varias dosis hasta conseguir un buen nivel de defensas y es importante destacar que el cachorro puede contagiarse durante este período, aunque ya haya recibido alguna dosis. Es por esto que el veterinario te recomienda que no saques a tu cachorro a la calle ni lo acerques a otros perros hasta que acabe su plan de vacunación completo.</p> 
     <hr>
  </div>
</div>


<!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1></h1>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">Daniel montoya zuluaga</p>
      </div>
    </div>



    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>
</html>