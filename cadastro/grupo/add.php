<?php
  require_once('functions.php');
  add();
?>

<?php include(ADMDASH_TEMPLATE); ?>

<h2>Novo Grupo Produto</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="customer['nome']" value="<?php echo $customer['nome']; ?>">
    </div>

      <div class="form-group col-md-10">
      <label for="comment">Descrição:</label>
      <textarea class="form-control" rows="5" name="customer['descricao']" value=""><?php echo $customer['descricao']; ?></textarea>
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(ADMDASHF_TEMPLATE); ?>
