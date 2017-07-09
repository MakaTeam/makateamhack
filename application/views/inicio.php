<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/principal.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/inicio.css"  media="screen,projection"/>


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <!--Header--> 
  <header>
    <nav>
      <div class="nav-wrapper azulFB">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html">Registrarse</a></li>
          <li><a href="<?php echo base_url()."index.php/" ?>Perfil?tipo_usuario=1">Iniciar Sesión</a></li>
        </ul>
      </div>
    </nav>
  </header> 
  <!--Header--> 
  <main>
    <!--Carrusel-->
    <div class="w3-display-container mySlides" align="center">
      <img  class="grises" src="<?php echo base_url(); ?>assets/css/img/5.jpg" width="100%">
      <div class="w3-display-middle w3-large w3-container w3-padding-16">
        <img class="opaco" src="<?php echo base_url(); ?>assets/css/img/Logo_Maka_1.png" width="50%">
      </div>
    </div>

    <div class="w3-display-container mySlides" align="center">
      <img class="grises" src="<?php echo base_url(); ?>assets/css/img/2.jpg" width="100%">
      <div class="w3-display-middle w3-large w3-container w3-padding-16">
        <img class="opaco" src="<?php echo base_url(); ?>assets/css/img/Logo_Maka_1.png" width="50%">
      </div>
    </div>

    <div class="w3-display-container mySlides" align="center">
      <img class="grises" src="<?php echo base_url(); ?>assets/css/img/3.jpg" width="100%">
      <div class="w3-display-middle w3-large w3-container w3-padding-16">
        <img class="opaco" src="<?php echo base_url(); ?>assets/css/img/Logo_Maka_1.png" width="50%">
      </div>
    </div>

    <div class="w3-display-container mySlides" align="center">
      <img class="grises" src="<?php echo base_url(); ?>assets/css/img/1.jpg" width="100%">
      <div class="w3-display-middle w3-large w3-container w3-padding-16">
        <img class="opaco" src="<?php echo base_url(); ?>assets/css/img/Logo_Maka_1.png" width="50%">
      </div>
    </div>

    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    <!--Carrusel--> 
    <!--Mapa--> 
    
  <!--Mapa--> 
  <!--Nuestros Donadores--> 
  <div class="row">
    <h1 align="center">Nuestros Donadores</h1>
    <div class="col s6">
      <h4>Personas</h4>
      <ul class="collection">
      <a href="<?php echo base_url()."index.php/"; ?>Perfil?ajenoPerfil=true">
        <li class="collection-item avatar">
          <img src="<?php echo base_url(); ?>assets/css/img/p1.jpg" alt="" class="circle" width="40px">
          <span class="title">Dan</span>
          <p>Aguilar</p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </a>
        <li class="collection-item avatar">
          <img src="<?php echo base_url(); ?>assets/css/img/p2.jpg" alt="" class="circle" width="40px">
          <span class="title">Dulce</span>
          <p>Juaréz</p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="<?php echo base_url(); ?>assets/css/img/p3.jpg" alt="" class="circle" width="40px">
          <span class="title">Jahe</span>
          <p>Mireles</p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <img src="<?php echo base_url(); ?>assets/css/img/p4.jpg" alt="" class="circle" width="40px">
          <span class="title">Sofia</span>
          <p>Romero</p>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>
    </div>
    <div class="col s6">
      <h4>Empresas</h4>
      <ul class="collection">
        <li class="collection-item avatar">
          <i class="material-icons circle">location_city</i>
          <span class="title">Coca Cola</span>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">location_city</i>
          <span class="title">Bimbo</span>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">location_city</i>
          <span class="title">Bonafont</span>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
          <i class="material-icons circle">location_city</i>
          <span class="title">Google</span>
          <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
      </ul>
    </div>
  </div>
  <!--Nuestros Donadores--> 
  <!--Estadisticas--> 
  <div class="row estadisticas">
    <div align="center" class="col s4">
      <div class="estadistica">
        <i class="material-icons large azulC margen3">favorite</i>
        <h2 class="azulC">457</h2>
      </div>
      <h3 class="azulC">Asociaciones Beneficiadas</h3>
    </div>
    <div align="center" class="col s4">
      <div class="estadistica">
        <i class="material-icons large dorado margen3">attach_money</i>
        <h2 class="dorado">282425</h2>
      </div> 
      <h3 class="dorado">Donaciones Realizadas</h3>
    </div>
    <div align="center" class="col s4">
      <div class="estadistica">
        <i class="material-icons large fiusha margen3">face</i>
        <h2 class="fiusha">1743</h2>
      </div>
      <h3 class="fiusha">Donadores</h3>
    </div>

  </div>
  <!--Estadisticas--> 
  <!-- Cerca de ti -->
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
          <a href="<?php echo base_url()."index.php/" ?>Perfil?ajenoAsociacion=true">Donar</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /Cerca de ti -->
  <!--Contactanos-->
  <div class="container">
    <h1 align="center">Contáctanos</h1>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Asunto</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Correo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1"></label>
          </div>
        </div>
        <a class="waves-effect waves-light btn formulario">Enviar</a>
      </form>
    </div>
  </div>
  <!--Contactanos--> 

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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/inicio.js"></script>

</body>
</html>