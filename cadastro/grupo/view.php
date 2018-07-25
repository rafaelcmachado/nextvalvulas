<?php
  require_once('functions.php');
  view($_GET['id']);
 ?>
<?php include(ADMDASH_TEMPLATE); ?>

<h2>Grupo de Produto <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['nome']; ?></dd>

	<dt>Descrição:</dt>
	<dd><?php echo $customer['descricao']; ?></dd>
  </br>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(ADMDASHF_TEMPLATE); ?>
