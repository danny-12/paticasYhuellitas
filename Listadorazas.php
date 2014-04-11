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
    <script type="text/javascript">
 
$('.dropdown-toggle').dropdown();
 
 
</script>
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
  <a class="pull-left" href="#">
    <img class="media-object" src="img/afgano.jpg" alt="...">
  </a>
  <div class="media-body">
    
    <h2>Afgano</h2>
    <p>El Afgano es un perro solemne y de apariencia elegante. Su pelaje es grueso, sedoso y de textura fina, su pelaje es generalmente típico de un animal que nació en alturas. El Afgano puede ser de todos.
    <hr>
  </div>
</div>

 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="img/dogo-canario.jpg" alt="...">
  </a>
  <div class="media-body">
    
    <h2>Dogo Canario</h2>
    <p>El Dogo Canario es un perro de gran tamaño. Su nombre completo es Perro de Presa Canario. Vienen de un pasado de perros pastores y guardianes. Alrededor del 1900 fue usado para cuidar las granjas, guiar al ganado y deshacerse de los predadores. El Dogo Canario es valiente y ladra muy poco. Aunque posee muchas habilidades defensivas y tiene una poderosa mandíbula. Son tranquilos y sumisos con su amo en el hogar, pero requieren una gran cantidad de entrenamiento. Es un perro ideal como mascota, perfecto para la familia que requiere un guardián y un amigo.
    <hr>
  </div>
</div>


 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="img/labrador-retriever.jpg" alt="...">
  </a>
  <div class="media-body">
    
    <h2>Labrador Retriever</h2>
    <p>El Labrador es el perro más popular del mundo, según el American Kennel Club. Es muy amigable, el Labrador es fiel y obediente. Debido a la aptitud del Labrador para complacer a su amo el Labrador es....
    <hr>
  </div>
</div>

 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="img/schnauzer-estandar.jpg" alt="...">
  </a>
  <div class="media-body">
    
    <h2>Schnauzer estándar</h2>
    <p>El Schnauzer estándar es un perro de trabajo es atlético y fuerte, es usado como perro de rescate o como perro de búsqueda. El tamaño estándar es el tamaño real de este perro. Son activos y enérgicos. Son bastante inteligentes y cariñosos, aunque a veces un tanto porfiados. El Schnauzer estándar es también un bueno perro guardián, y se comporta bien con los niños.
    <hr>
  </div>
</div>

 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="img/valley-bulldog.jpg" alt="...">
  </a>
  <div class="media-body">
    
    <h2>Valley Bulldog</h2>
    <p>El Valley Bulldog es un perro híbrido, obtenido del cruce entre Bulldog Inglés y Bóxer. Puede parecer un Bulldog Inglés más alto o un Bóxer más pequeño. Es musculoso, resistente, tiene una cabeza ancha, cuello grueso y un pecho muy profundo. Sus ojos son redondos y sus orejas son en forma de rosa o botón. Sus pies son gruesos y resistentes. Los Valley Bulldog tienen dientes muy fuertes y mandíbulas que pueden ser prognatas levemente o marcadamente..
    <hr>
  </div>
</div>

 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="img/pastor-bohemio.jpg" alt="...">
  </a>
  <div class="media-body">
    
    <h2>Pastor Bohemio</h2>
    <p>El Pastor Bohemio es un pastor de tamaño medio, de pelaje grueso y largo y una gruesa capa de pelaje interior, muy bueno contra el clima frío. Son de complexión robusta pero harmoniosa, y bastante compacta. Los Pastor Bohemio poseen orejas erectas y unja bella cola.
    <hr>
  </div>
</div>

 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="img/mastin-napolitano.jpg" alt="...">
  </a>
  <div class="media-body">
    
    <h2>Mastin Napolitano</h2>
    <p>El Mastin Napolitano es grande y muy poderoso. Los Mastines, en general son muy voluptuosos y masivos. A pesar de su apariencia fiera, los Mastines suelen ser perros tranquilos y obedientes. Se caracterizan por la piel suelta que cubre sus cuerpos y por el pelaje corto. Es procedente de Italia, es muy antiguo. Es usado como defensor o como guardián. Se mueve de forma lenta, similar a como lo haría un león.
    <hr>
  </div>
</div>


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    

</body>
</html>
