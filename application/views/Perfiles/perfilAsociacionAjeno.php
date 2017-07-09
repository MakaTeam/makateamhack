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
          <a href="<?php echo base_url() ?>" class="brand-logo"><img src="<?php echo base_url() ?>assets/css/img/Logo_Maka_2.png" width="15%"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class='dropdown-button' href='#' data-activates='dropdown1'><i class="material-icons">settings</i></a></li>
          </ul>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="<?php echo base_url() ?>">Cerrar Sesión</a></li>
            <li><a href="#!">Configuración</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!--Header-->
    <main>
    <div class="row">
      <div class="col l12 perfil" align="center">
        <i class="material-icons acicono">location_city</i>
        <h3>Casa Hogar San Lázaro</h3>
      </div>
    </div>
    <div class="row" align="center">
      <div class="col l12">
        <img class="mapa" src="<?php echo base_url() ?>assets/css/img/mapa2.png" alt="">
      </div>
    </div>
    <!--Footer-->
    <div class="infoAs">
      <h1 align="center">Información</h1>
      <div class="container">
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
    <div class="contactoAs">
      <h1 align="center">Contacto</h1>
      <div class="container" align="center">
        <a href="#"><h3 class="azulC">https://www.facebook.com/MundoPatitasOficial/</h3></a>
      </div>
    </div>
    <div class="row ">
      <div class="col l12 reporte azulCB" align="center">
        <div class="row estadisticasAs">
          <div align="center" class="col s6">
            <div class="estadistica">
              <i class="material-icons large margen3">people</i>
              <h2 class="">225</h2>
            </div>
            <h3 class="">Donadores</h3>
          </div>
          <div align="center" class="col s4">
            <div class="estadistica">
              <i class="material-icons large  margen3">face</i>
            </div>
            <h3 class="">Status</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col l12" align="center">
        <h1>Donaciones</h1>
        <img src="<?php echo base_url() ?>assets/css/img/paypal.png" width="200px">
      </div>
    </div>
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