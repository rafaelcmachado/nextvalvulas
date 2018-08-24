<?php
  require_once('functions.php');
  $id = $_GET['id'];
  add($id);
?>

<?php include(ADMDASH_TEMPLATE); ?>

<h2>Novo Grupo Produto</h2>

<form action="add.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Tamanho:</label>
      <input type="text" class="form-control" name="customer['dimensao']" value="<?php echo $customer['dimensao']; ?>">
    </div>
    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="desc">Preço:</label>
        <input type="number" class="form-control" name="customer['preco']" value="<?php echo $customer['preco']; ?>" step="0.01">
      </div>
      <input hidden="true" type="text" class="form-control" name="customer['idProduto']" value="<?php echo $_GET['id']; ?>">
    </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="../produto/prodview.php?id=<?php echo $_GET['id']; ?>" class="btn btn-default">Cancelar</a>
    </div>
  </div>

</form>

<?php include(ADMDASHF_TEMPLATE); ?>
