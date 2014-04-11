<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


	<title></title>

<style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: black;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }

    </style>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <script href="js/bootstrap-dropdown.js" type="text/javascript"></script>
    <script type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />  

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

   <br />
<div class="container">
    <div class="row">
        <div class="col-md-24col-md-offset-3">
          <form class="form-vertical well" role="form">
            <div class="row">
              <?php 
                //Conexion BD 
                $conexion=mysql_connect("localhost", "root", "123");
                $bd=mysql_select_db("perritos");

                $query = mysql_query("SELECT * FROM mascota");

                while ($fila = mysql_fetch_array($query)) {
                  echo '<form method="POST" action="controller/mascota.php">
                      <div class="col-xs-6">
                       <img src="'.$fila[5].'" alt="">
                        <h2>Nombre mascota: '.$fila[1].'</h2>
                        <p>Raza: '.$fila[2].'.</p>
                        <p>Edad: '.$fila[3].'</p>
                        <input type="hidden" name="id" value='.$fila[0].'>
                        <a href="actualizarMascota.php?id='.$fila[0].'" class="btn btn-danger">Modificar</a>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                      </div>';
                }

              ?>
             
            </div>
              </div>
            </div>
          </form>


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>