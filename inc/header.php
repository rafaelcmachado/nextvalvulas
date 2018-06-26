<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Flattern - Flat and trendy bootstrap site template</title>
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
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Cadastrar</a></li>
                <li><a href="#mySignin" data-toggle="modal">Entrar</a></li>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Craindo sua <strong>Conta</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">E-mail</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Senha</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Senha">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirma Senha</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Senha">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Cadastrar</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Você já possui uma conta? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Entre</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">E-mail</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Senha</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Senha">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Entrar</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Esqueceu a senha? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Resete</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Resetando a sua <strong>senha</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">E-mail</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Resetar senha</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Enviaremos instruções sobre como redefinir sua senha para sua caixa de entrada!
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
              <h1>Flat and trendy bootstrap template</h1>
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
                    <li class="dropdown">
                      <a href="#">Pages <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Blog <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="contact.html">Contact </a>
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
