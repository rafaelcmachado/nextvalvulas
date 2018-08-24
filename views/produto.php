<?php require_once '../config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php
  require_once('functions.php');
  view($_GET['id']);

 ?>
<section id="inner-headline" >
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="inner-heading">
          <h2>Produtos</h2>
        </div>
      </div>
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
          <li class="active">Produtos</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <ul class="portfolio-categ filter">
          <li class="all active"><a href="#">Todos</a></li>
          <!--<li class="web"><a href="#" title="">Web design</a></li>
          <li class="icon"><a href="#" title="">Icons</a></li>
          <li class="graphic"><a href="#" title="">Graphic design</a></li>-->
        </ul>
        <div class="clearfix">
        </div>
          <section id="projects">
            <ul id="thumbs" class="portfolio">
              <!-- Item Project and Filter Name -->
              <?php if ($customers) : ?>
              <?php foreach ($customers as $customer) : ?>
                <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                  <img src="<?php echo BASEURL; ?>img/produto/<?php echo $customer['caminho']; ?>" alt="Erro ao carregar Imagem.">
                  <p><strong><?php echo $customer['nome']; ?></strong></p>
                  <p>Preço <?php echo $customer['preco']; ?></p>
                  <a href="<?php echo BASEURL; ?>views/detailProd/viewahs.php?id=<?php echo $customer['id']; ?>">Ver Mais</a>
                </li>

              <?php endforeach; ?>
              <?php else : ?>
                <p>Nehum produto cadastrado</p>
              <?php endif; ?>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </section>

<?php include(FOOTER_TEMPLATE); ?>
