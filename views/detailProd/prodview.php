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
          <div class="span4">
            <div class="inner-heading">
              <h2><?php echo $customer['grupo'] . ' ' . $customer['nome']; ?></h2>
            </div>
          </div>
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
          <div class="span8">
            <article>
              <div class="top-wrapper">
                <div class="post-heading">
                </div>
                <!-- start flexslider -->
                <div class="flexslider">
                      <img src="../../img/produto/%20<?php echo $customer['caminho']; ?>" alt="" />
                </div>
                <!-- end flexslider -->
              </div>
              <p>

              </p>
            </article>
          </div>
          <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <h5 class="widgetheading">Item</h5>
                <ul class="folio-detail">
                  <li><label>Preço : <?php echo $customer['preco']; ?></label></li>
                  <form action="add.php?id=<?php echo $_GET['id']; ?>" method="post">
                    <label for="name">Quantidade:</label>
                    <input type="text" class="form-control" name="customer['codRef']" value="<?php echo $customer['codRef']; ?>">
                    <div class="form-group col-md-3">
                      <label for="name">Bitola:</label>
                      <?php
                        if ($bitolas == false) {
                            echo 'Falha no combo!';
                        } else {
                            echo "<select type='text' class='form-control' name=\"customer['id']\">";

                            for ($i = 0; $i < mysqli_num_rows($bitolas); $i++) {
                                $linha = mysqli_fetch_array($bitolas);
                                if($linha['id'] == $customer['idGrupo']){
                                  echo "<option value='".$linha['id']."' selected='selected'>".$linha['codRef']."</option>";
                                }
                                else{
                                  echo "<option value='".$linha['id']."'>".$linha['codRef']."</option>";
                                }
                            }
                            echo "</select>";
                        }
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary"> + Adicionar ao carrinho</button>
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
      <div class="container divBitola">
          <div class="row">
            <div class="span8">
            </div>
            <div class="span4">
              <aside class="right-sidebar">
                <h5 class="widgetheading">Bitolas </h5> <p>(Obs: Clique em qualquer linha para mais informações)</p>
              </aside>
            </div>
          </div>
        </div>
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="flexslider">
                  <img id="myImg"  src="../../img/bitola/%20" alt="" />
            </div>
          </div>
            <div class="span6">
              <table class="table table-hover table-bitola">
                <thead>
                  <tr>
                    <th scope="col">Código</th>
                    <th >Descrição</th>
                    <th >Referência</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($bitolas) : ?>
                  <?php foreach ($bitolas as $bitola) : ?>
                  	<tr onclick="myFunction('<?php echo $bitola['caminho']; ?>')">
                      <th scope="row"><?php echo $bitola['codRef']; ?></th>
                      <td><?php echo $bitola['descricao']; ?></td>
                      <td><?php echo $bitola['ref']; ?></td>

                    </tr>
                  <?php endforeach; ?>
                  <?php else : ?>
                  	<tr>
                  		<td colspan="6">Nenhuma bitola cadastrada!</td>
                  	</tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      function myFunction(caminho) {
          var camiBit = caminho;
          document.getElementById("myImg").src = '../../img/bitola/%20' + camiBit ;
      }
    </script>
<?php include(FOOTER_TEMPLATE); ?>
