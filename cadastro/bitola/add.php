<?php
  require_once('functions.php');
  add($_GET['id']);
?>

<?php include(ADMDASH_TEMPLATE); ?>

<h2>Novo Grupo Produto</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Codigo</label>
      <input type="text" class="form-control" name="customer['codRef']" value="<?php echo $customer['codRef']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="desc">Descrição:</label>
      <input type="text" class="form-control" name="customer['descricao']" value="<?php echo $customer['descricao']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="ref">Descrição:</label>
      <input type="text" class="form-control" name="customer['ref']" value="<?php echo $customer['ref']; ?>">
    </div>
    <input hidden="true" type="text" class="form-control" name="customer['idProduto']" value="<?php echo $_GET['id']; ?>">
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(ADMDASHF_TEMPLATE); ?>
