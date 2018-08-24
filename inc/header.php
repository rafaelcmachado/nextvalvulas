<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Next Valvulas - E Commerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="<?php echo BASEURL; ?>css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo BASEURL; ?>css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?php echo BASEURL; ?>css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo BASEURL; ?>css/jcarousel.css" rel="stylesheet" />
  <link href="<?php echo BASEURL; ?>css/flexslider.css" rel="stylesheet" />



  <link href="<?php echo BASEURL; ?>css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="<?php echo BASEURL; ?>skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASEURL; ?>ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASEURL; ?>ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASEURL; ?>ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo BASEURL; ?>ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="<?php echo BASEURL; ?>img/logo.png" />

  <!-- =======================================================
    Author: Rafael Carlos Machado
    Author URL: http://upmarkvision.com.br
  ======================================================= -->
</head>

<?php
  ob_start();
  session_start();
  ?>

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
              <a href="/"><img src="img/logo.png" alt="" class="img-logo" /></a>

            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="<?php echo BASEURL; ?>index.php">Inicio <i class="fas fa-home"></i></a>
                    </li>
                    <li class="dropdown active">
                      <a href="<?php echo BASEURL; ?>about.php">Sobre nós <i class="fas fa-bookmark"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Produtos <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <!--<li class="dropdown"><a href="#">Valvulas <i class="icon-angle-right"></i></a>
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
                        </li>-->
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=13">Válvulas Borboletas</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=9">Vávulas Esferas</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=12">Válvulas Gaveta</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=11">Válvulas Globo</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=14">Válvulas Guilhotinas</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=16">Válvulas Retenção</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=15">Atuadores</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=17">Filtro Y</a></li>
                        <li><a href="<?php echo BASEURL; ?>views\produto.php?id=">Diversos</a></li>

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
