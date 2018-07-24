<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Next Valvulas - ECommerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="../css/bootstrap.css" rel="stylesheet" />
  <link href="../css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="../css/jcarousel.css" rel="stylesheet" />
  <link href="../css/flexslider.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="../ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<?php session_start(); ?>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>Confira os nossos contatos diretos</strong></li>
              <li>Local escritorio: Indefinido</li>
              <li>Telefones <i class="fas fa-phone"></i> &nbsp<strong>(47) 99999-9999 - (47) 99999-9999</strong></li>
              <li>E-mail <i class="fas fa-envelope"></i> &nbsp<strong>Indefinido</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <?php
          error_reporting(0);
          if ($_SESSION['previlegio'] == 1){
            include(ADM_TEMPLATE);
          }elseif ($_SESSION['previlegio'] == 2) {
            include(USER_TEMPLATE);
          }else{
            include(LOGIN_TEMPLATE);
          }
         ?>

        <div class="row">
          <div class="span4">
            <div class="logo">
              <h1>LOGO</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Inicio <i class="fas fa-home"></i></a>
                    </li>
                    <li class="dropdown active">
                      <a href="about.php">Sobre nós <i class="fas fa-bookmark"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Produtos <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">Valvulas <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="index.html">Esfera</a></li>
                            <li><a href="index-alt2.html">Borboleta</a></li>
                            <li><a href="index-alt3.html">Gaveta</a></li>
                            <li><a href="index-alt3.html">Globo</a></li>
                            <li><a href="index-alt3.html">Guilhotina</a></li>
                            <li><a href="index-alt3.html">Retenção</a></li>
                            <li><a href="index-alt3.html">Segurança</a></li>
                            <li><a href="index-alt3.html">Vapor</a></li>
                          </ul>
                        </li>
                        <li><a href="typography.html">Filtro Y</a></li>
                        <li><a href="table.html">Flanges</a></li>
                        <li><a href="components.html">Reservatório Ar Comprimido</a></li>
                        <li><a href="animations.html">Pneumatica</a></li>
                        <li><a href="icons.html">Atuadores</a></li>
                        <li><a href="icon-variations.html">Linha Valor</a></li>
                        <li><a href="icon-variations.html">Diversos</a></li>

                      </ul>
                    </li>

                    <li>
                      <a href="contact.html">Contato </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
