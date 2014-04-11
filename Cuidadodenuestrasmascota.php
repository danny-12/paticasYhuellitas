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
                            <li><a href="perfilmascota.php">Perfil Mascota</a>
                            </li>
                            <li><a href="Actualizarperfil.php">Actualizar perfil</a></li>
                            <li><a href="Eliminarperfil.php">Eliminar</a></li>
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
<div class="col-md-12">
<h1>Cuidado de nuestras mascotas</h1>

    <h3>Mantenga activa a su mascota</h3>
    <p>Actividad física es igual a salud. Los perros necesitan salir a pasear un par de veces aunque sea unos 20 minutos. Por supuesto en casa deberíamos mantenerlo activo (pidiéndole que nos traiga cosas, jugando, etc.)</p>
    <hr>
    <h2>Hay que cuidar la dieta de la mascota</h2>
    <p>Los perros y gatos con sobrepeso son algo ya habitual. No es cuestión de matarlos de hambre pero tampoco de cebarlos. A menudo tenemos la obsesión de que a más gorditos están más sanos.

Es importante asesorarnos por nuestro veterinario de qué pueden y no pueden comer (a todo el mundo le hace gracia ver como su animalito se come tal o cual cosa, a más extraña mejor)

Hay que vigilar el nivel de proteínas ya que, al igual que nos ocurre a nosotros, un exceso de proteínas sobre carga los riñones y acidifica el organismo.

Aumentar el consumo de alimentos frescos (verduras, arroz, frutas, pescado y carne) en lugar de darles siempre piensos. Muchos animalitos mejoran de alergias, problemas de piel y otras enfermedades al introducirles alimentos cocinados por nosotros.</p>   
    <hr>
</div>
</div>

 <div class="container">
<div class="col-md-12">
    <h3>Dele vitaminas y antioxidantes a su mascota</h3>
    <p>Cada vez hay más personas que en lugar de darles como premio una golosina a su animalito le da un comprimido multivitamínico o antioxidante masticable.
    Su veterinario le aconsejará el producto ideal y la dosis.

    Cada vez más se reconoce los efectos positivos de los antioxidantes sobre el mantenimiento de la salud sobre todo en personas y animales mayores.</p>
    <hr>
    <h3>Tienen, como nosotros, necesidad de afecto y de relacionarse</h3>
    <p>Muchas personas piensan que simplemente dándoles de comer y sacándoles a pasear ya hacen más que suficiente.

    Siempre nos hemos de poner en su caso y entender que también nos gustaría que jugaran con nosotros y nos acariciaran. Los animales agradecen mucho las muestras físicas de afecto.

    La prueba es que muchos animalitos que estaban en perreras o centros de acogida aunque estuvieran bien alimentados se suelen encontrar tristes. A la que alguien los adopta y disfruta con ellos, recuperan el entusiasmo y les cambia hasta el brillo del pelo.</p>   
    <hr>
</div>
</div>







 <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>
</html>