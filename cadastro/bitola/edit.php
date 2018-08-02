<?php
  require_once('functions.php');
  edit();
?>

<?php include(ADMDASH_TEMPLATE); ?>

<h2>Atualizar Bitola</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Código:</label>
      <input type="text" class="form-control" name="customer['codRef']" value="<?php echo $customer['codRef']; ?>">
    </div>
    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="desc">Descrição:</label>
        <input type="text" class="form-control" name="customer['descricao']" value="<?php echo $customer['descricao']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <label for="ref">Referencia:</label>
        <input type="text" class="form-control" name="customer['ref']" value="<?php echo $customer['ref']; ?>">
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
