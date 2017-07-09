<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/principal.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/inicio.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <!--Header-->
    <header>
      <nav>
        <div class="nav-wrapper azulFB">
          <a href="<?php echo base_url(); ?>" class="brand-logo"><img src="<?php echo base_url() ?>assets/css/img/Logo_Maka_2.png" width="15%"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class='dropdown-button' href='#' data-activates='dropdown1'><i class="material-icons">settings</i></a></li>
          </ul>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="<?php echo base_url(); ?>">Cerrar Sesión</a></li>
            <li><a href="#!">Configuración</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!--Header-->
    <main>
    <div class="row">
      <div class="col l4 perfil" align="center">
        <img src="<?php echo base_url() ?>assets/css/img/p1.jpg" alt="" class="circle" width="250px">
        <h3>Dan Aguilar</h3>
      </div>
      <h1 align="center">Tu nivel de donaciones</h1>
      <div class="col l8 status" align="center">
        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ha realizado más de 2 donaciones"><i class="material-icons medium azulC opaco">favorite</i></a>
        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ha realizado más de 10 donaciones"><i class="material-icons medium azulF ">favorite</i></a>
        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ha realizado más de 20 donaciones"><i class="material-icons medium rosa opaco">favorite</i></a>
        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ha realizado más de 30 donaciones"><i class="material-icons medium fiusha opaco">favorite</i></a>
        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ha realizado más de 40 donaciones"><i class="material-icons medium dorado opaco">favorite</i></a>
      </div>
    </div>
    <div class="row">
      <div class="col l12 reporte azulCB" align="center">
        <h1 class="reporta">¿Conoces alguna Asociación? Indícanos <u>dónde</u></h1>
      </div>
    </div>

    
    <div class="row">
      <div class="col l7">
        <img class="mapa" src="<?php echo base_url() ?>assets/css/img/mapa2.png" alt="">
      </div>
      <div class="col l5">
        <div class="card cardPerfil">
          <div class="card-image">
            <img src="<?php echo base_url() ?>assets/css/img/1.jpg">
            <span class="card-title">Nombre Asociación</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="<?php echo base_url()."index.php/" ?>Perfil?tipo_usuario=2">Donar</a>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->
    <div class="row">
      <h1 align="center">Mis Donaciones</h1>
      <div class="col l6">
        <h2 align="center">Realizadas</h2>
        <table>
          <thead>
            <tr>
              <th>Nombre de la Asociación</th>
              <th>Fecha</th>
              <th>Tipo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <!--iTERAR AQUI-->
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        
      </div>
      <div class="col l6">
        <h2 align="center">Pendientes</h2>
        <table>
          <thead>
            <tr>
              <th>Nombre de la Asociación</th>
              <th>Fecha</th>
              <th>Tipo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <!--iTERAR AQUI-->
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--Footer-->
    </main>
    <!--Footer-->
    <footer class="page-footer azulFB">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Nosotros</h5>
            <p class="grey-text text-lighten-4">BCoders</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Redes Sociales</h5>
            <ul>
              <i class="fa fa-facebook fa-3x"></i>
              <i class="fa fa-twitter fa-3x"></i>
              <i class="fa fa-youtube-play fa-3x"></i>
              <i class="fa fa-instagram fa-3x"></i>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2017 BCoders
        </div>
      </div>
    </footer>
    <!--Footer-->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/perfil.js"></script>
  </body>
</html>