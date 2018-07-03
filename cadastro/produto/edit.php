<?php
  require_once('functions.php');
  grupoFind();
  edit();
?>

<?php include(ADMDASH_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="customer['nome']" value="<?php echo $customer['nome']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Imagem</label>
      <input name="arquivo" type="file" />
    </div>

    <div class="form-group col-md-2">
      <label for="campo1">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['dataCadastro']" disabled value="<?php echo $customer['dataCadastro']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="name">Grupo</label>
      <?php
        if ($grupo == false) {
            echo 'Falha no combo!';
        } else {
            echo "<select type='text' class='form-control' name=\"customer['idGrupo']\">";

            for ($i = 0; $i < mysqli_num_rows($grupo); $i++) {
                $linha = mysqli_fetch_array($grupo);
                if($linha['id'] == $customer['idGrupo']){
                  echo "<option value='".$linha['id']."' selected='selected'>".$linha['nome']."</option>";
                }
                else{
                  echo "<option value='".$linha['id']."'>".$linha['nome']."</option>";
                }
            }
            echo "</select>";
        }
        ?>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Preço</label>
      <input type="text" class="form-control" name="customer['preco']" value="<?php echo $customer['preco']; ?>">
    </div>

    <div class="form-check col-md-1">

      <label><input type="checkbox" name="inativo" value="1"
         <?php
            if($customer['inativo'] == 1){
              echo"checked='checked'";
            }

      ?>>Ativo</label>
    </div>
  </div>
  <div class="row">

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
