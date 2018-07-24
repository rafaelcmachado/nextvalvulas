<?php
  require_once('functions.php');
  view($_GET['id']);
 ?>
<?php include(ADMDASH_TEMPLATE); ?>

<h2>Produto <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>


<dl class="dl-horizontal">
	<dd><img src="smiley.gif" alt="Smiley face" height="42" width="42"></dd>

</dl>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['nome']; ?></dd>

	<dt>Preço:</dt>
	<dd><?php echo $customer['preco']; ?></dd>

	<dt>Grupo:</dt>
	<dd><?php echo $customer['grupo']; ?></dd>
</dl>

<dl class="dl-horizontal">

  <dt>Data de Cadastro:</dt>
	<dd><?php echo $customer['dataCadastro']; ?></dd>


	<dt>Descrição:</dt>
	<dd><?php echo $customer['descricao']; ?></dd>


</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(ADMDASHF_TEMPLATE); ?>
