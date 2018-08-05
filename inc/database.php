<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $conn;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
	}
}

function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */

function find( $table = null, $id = null ) {

	$database = open_database();
	$found = null;

	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
	    $result = $database->query($sql);

	    if ($result->num_rows > 0) {
	      $found = $result->fetch_assoc();
	    }

	  } else {

	    $sql = "SELECT * FROM " . $table;
	    $result = $database->query($sql);

	    if ($result->num_rows > 0) {
	      $found = $result->mysqli_fetch_all(MYSQLI_ASSOC);

        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }

	close_database($database);
	return $found;
}

function findProdutoIndex() {

	$database = open_database();
	$found = null;

	try {
		$database = open_database();
		$sql = "SELECT
													p.id,
													p.nome,
						concat(\"R$\",p.preco) as preco,
													g.nome as grupo,
							DATE_FORMAT(p.dataCadastro, \"%d/%m/%Y\") as dataCadastro,
											 IF(p.inativo = 0, \"Sim\", \"Não\") as inativo
						from      produto p
						left join grupo_produto g on g.id = p.idGrupo";
		$resultado = mysqli_query($database, $sql);
		if (mysqli_num_rows($resultado) > 0) {
				return $resultado;
		} else {
				return false;
		}

	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
}

function findBitolaIndex($id = null) {

	$database = open_database();
	$found = null;

	try {
		$database = open_database();
		$sql = "SELECT b.*, i.caminho from bitola b
						left join imagem_bitola i on i.idBitola = b.id
						where b.idProduto = " . $id;
		$resultado = mysqli_query($database, $sql);
		if (mysqli_num_rows($resultado) > 0) {
				return $resultado;
		} else {
				return false;
		}

	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
}

function findGeralIndex($table = null) {

	$database = open_database();
	$found = null;

	try {
		$database = open_database();
		$sql = "SELECT * from " . $table;
		$resultado = mysqli_query($database, $sql);
		if (mysqli_num_rows($resultado) > 0) {
				return $resultado;
		} else {
				return false;
		}

	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
}

function findProduto( $id = null) {

	$database = open_database();
	$found = null;

	try {
		$database = open_database();
		$sql = "SELECT
													p.id,
													p.nome,
						concat(\"R$ \",CONVERT(p.preco, DECIMAL(10,2))) as preco,
													g.nome as grupo,
							DATE_FORMAT(p.dataCadastro, \"%d/%m/%Y\") as dataCadastro,
											 IF(p.inativo = 0, \"Sim\", \"Não\") as inativo,
											    p.descricao,
													i.caminho
						from      produto p
						left join grupo_produto g on g.id = p.idGrupo
						left join imagem_produto i on i.idProduto = p.id and i.seq = 1
						where p.id = $id" ;
						$result = $database->query($sql);

				    if ($result->num_rows > 0) {
				      $found = $result->fetch_assoc();
							return $found;
				    }

	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }

}

function findGrupo() {
				$database = open_database();
        $sql = "SELECT * FROM grupo_produto ORDER BY nome";
        $resultado = mysqli_query($database, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
			}

	function findBitola($id = null) {
					$database = open_database();
	        $sql = "SELECT * FROM bitola where idProduto = " . $id . " ORDER BY nome";
	        $resultado = mysqli_query($database, $sql);
	        if (mysqli_num_rows($resultado) > 0) {
	            return $resultado;
	        } else {
	            return false;
	        }
				}

function findUltimoProd() {
							$database = open_database();
			        $sql = "SELECT id FROM produto ORDER BY id desc limit 1";
			        $resultado = mysqli_query($database, $sql);
			        if (mysqli_num_rows($resultado) > 0) {
									$valor =	mysqli_fetch_array($resultado, 1);
			            return $valor['id'];
			        } else {
			            return false;
			        }
						}

function findUltimaBitola() {
							$database = open_database();
			        $sql = "SELECT id FROM bitola ORDER BY id desc limit 1";
			        $resultado = mysqli_query($database, $sql);
			        if (mysqli_num_rows($resultado) > 0) {
									$valor =	mysqli_fetch_array($resultado, 1);
			            return $valor['id'];
			        } else {
			            return false;
			        }
						}

function findCliente() {
				$database = open_database();
        $sql = "SELECT * FROM cliente ORDER BY nome";
        $resultado = mysqli_query($database, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
				close_database($database);

			}


/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
  return find($table);
}

function login(){
	ob_start();
	session_start();
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
	{
	    unset($_SESSION['login']);
	    unset($_SESSION['senha']);
	    header('location:index.php');
	    }

	$logado = $_SESSION['login'];
	ob_end_flush();
}

/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {

  $database = open_database();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');

  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) {

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
}

/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update($table = null, $id = 0, $data = null) {

  $database = open_database();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) {

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
}

function updateImg($table = null, $id = 0, $data = null) {

  $database = open_database();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE idProduto=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) {

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
}

/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {

  $database = open_database();

  try {
    if ($id) {

      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) {

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
}

function findCliInst(){
	$database = open_database();
	$found = null;

	try {
    $sql = "SELECT i.id as id, c.nome as nome, i.loginInsta as loginInsta, i.passInsta as passInsta, i.dataCadastro as dataCadastro, c.ativo as ativo FROM instagram i INNER JOIN cliente c on c.id = i.idCli" ;
    $result = $database->query($sql);

    if ($result->num_rows > 0) {
      $found = $result->fetch_all(MYSQLI_ASSOC);

      /* Metodo alternativo
      $found = array();

      while ($row = $result->fetch_assoc()) {
        array_push($found, $row);
      } */
    }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }

	close_database($database);
	return $found;
}
