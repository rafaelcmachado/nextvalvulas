<?php
  require_once('functions.php');
  view($_GET['id']);
  indexBitola($_GET['id']);
 ?>
<?php include(ADMDASH_TEMPLATE); ?>

<h2>Produto <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<div class="container">
  <div class="row">
    <div class="cl-md-4">
      <dl class="dl-horizontal">
      	<dd><img src="../../img/produto/%20<?php echo $customer['caminho']; ?>" alt="Error Image"></dd>

      </dl>
    </div>
    <div class="cl-md-8">
      <div class="container">
        <div class="row">
            <div class="cl-md-4 campo">
            	<dt>Nome:</dt>
            	<dd><?php echo $customer['nome']; ?></dd>
            </div>

            <div class="cl-md-4 campo">
            	<dt>Grupo:</dt>
            	<dd><?php echo $customer['grupo']; ?></dd>
            </div>

            <div class="cl-md-4 campo">
            	<dt>Preço:</dt>
            	<dd><?php echo $customer['preco']; ?></dd>
            </div>

        </div>
        <div class="row">
          <div class="cl-md-4 campo">
            <dt>Data de Cadastro:</dt>
            <dd><?php echo $customer['dataCadastro']; ?></dd>
          </div>
          <div class="cl-md-8 campo">
            <dt>Descrição:</dt>
            <dd><?php echo $customer['descricao']; ?></dd>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="container bitolas-body">
  <div class="row">
    <div class="cl-md-2">
      <h2 class="title-bitola">
        Bitolas
      </h2>
    </div>
    <div class="cl-md-2 campo">
      <a class="btn btn-primary" href="../bitola/add.php?id=<?php echo $_GET['id']; ?>"><i class="fa fa-plus"></i> Nova Bitola</a>
    </div>
  </div>
</div>
<table class="table table-hover table-bitola">
<thead>
	<tr>
		<th >Código</th>
		<th width="30%">Descrição</th>
    <th>Referencia</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
  <?php if ($bitolas) : ?>
  <?php foreach ($bitolas as $bitola) : ?>
	<tr>
		<td><?php echo $bitola['codRef']; ?></td>
    <td><?php echo $bitola['descricao']; ?></td>
    <td><?php echo $bitola['ref']; ?></td>
		<td class="actions text-right">
			<a href="../bitola/edit.php?id=<?php echo $bitola['id']; ?>&idProd=<?php echo $_GET['id'];?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="deleteBitola.php?id=<?php echo $bitola['id']; ?>&idProd=<?php echo $_GET['id'];?>" class="btn btn-sm btn-danger">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
  <tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(ADMDASHF_TEMPLATE); ?>
