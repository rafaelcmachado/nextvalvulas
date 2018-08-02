<?php
    require_once('functions.php');
    index();
?>

<?php include(ADMDASH_TEMPLATE); ?>
<?php include('paginacaoup.php'); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Produto</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Produto</a>
	    	<a class="btn btn-primary" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>Preço</th>
    <th>Grupo</th>
    <th>Data Cadastro</th>
    <th>Ativo</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php while($customer = mysqli_fetch_assoc($resultado_cursos)) {
  $verifica = 1
  ?>
	<tr>
		<td><?php echo $customer['id']; ?></td>
		<td><?php echo $customer['nome']; ?></td>
		<td><?php echo $customer['preco']; ?></td>
    <td><?php echo $customer['grupo']; ?></td>
		<td><?php echo $customer['dataCadastro']; ?></td>
    <td><?php echo $customer['inativo']; ?></td>
		<td class="actions text-right">
      <a href="prodview.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php } ?>
<?php if($verifica != 1){ ?>
  <tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php } ?>
</tbody>
</table>

<?php include('paginacaodown.php'); ?>
<?php include('modal.php'); ?>
<?php include(ADMDASHF_TEMPLATE); ?>
