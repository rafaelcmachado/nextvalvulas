<?php require_once '../../config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>

<?php
  require_once('functions.php');
  view($_GET['id']);
  indexBitola($_GET['id']);
  grupoBitola($_GET['id']);
 ?>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4"></div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#"><?php echo $customer['grupo']; ?></a><i class="icon-angle-right"></i></li>
              <li class="active">Produto</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span4">
            <article>
              <div class="top-wrapper">
                <div class="post-heading">
                </div>
                <!-- start flexslider -->
                <div class="flexslider">
                      <img src="../../img/produto/<?php echo $customer['caminho']; ?>" alt="" />
                </div>
                <!-- end flexslider -->
              </div>
              <p>

              </p>
            </article>
          </div>
          <div class="span8">
            <aside class="right-sidebar">
              <div class="widget">
                <h5 class="widgetheading"><?php echo $customer['nome']; ?></h5>
                <ul class="folio-detail">
                  <li><label id="lblPreco" value="" >Preço Médio: <?php echo $customer['preco']; ?> </label></li>
                  <form action="add.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <label for="name">Quantidade:</label></br>
                    <input type="text" class="form-control" name="customer['codRef']" value="<?php echo $customer['codRef']; ?>">
                    <div class="form-group col-md-3">
                      <label for="name">Bitola:</label>

                    </div>
                    <div>
                      <?php
                      $i = 0;
                      $verifica = 0;

                      if ($bitolas) : ?>
                      <?php foreach ($bitolas as $bitola) : ?>
                        <?php if ($verifica == 0) {
                          $verifica = 1;
                          $i = 1;
                          echo "<div>";
                          echo "<label class='radio-inline' onchange=\"myFunction(" . $bitola['preco'] . ")\"><input type='radio' name=\"customer['dimensao']\" value=\"". $bitola['id'] ."\" checked> " . $bitola['dimensao'] . "</label>";

                        } else {
                          if ($i < 3) {
                            $i += 1;
                            echo "<label class='radio-inline radio-bitola' onchange=\"myFunction(" . $bitola['preco'] . ")\"><input type='radio' name=\"customer['dimensao']\" value=\"". $bitola['id'] ."\" > " . $bitola['dimensao'] . "</label>";
                          } else {
                            $i = 1;
                            echo "</div>";
                            echo "<div>";
                            echo "<label class='radio-inline' onchange=\"myFunction(" . $bitola['preco'] . ")\"><input type='radio' name=\"customer['dimensao']\" value=\"". $bitola['id'] ."\"> " . $bitola['dimensao'] . "</label>";

                          }

                        }
                        ?>
                      <?php endforeach; ?>
                      <?php else : ?>
                      	<tr>
                      		<td colspan="6">Nenhuma bitola cadastrada!</td>
                      	</tr>
                      <?php endif; ?>
                    <div>
                      <button type="submit" class="btn btn-primary"> + Adicionar ao carrinho</button>
                    </div>
                  </form>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Descrição Geral</h5>
                <p>
                  <?php echo $customer['descricao']; ?>
                </p>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <script>
      function myFunction(precoBit) {
          document.getElementById("lblPreco").innerHTML = "Preço: R$" + precoBit;
      }
    </script>
<?php include(FOOTER_TEMPLATE); ?>
