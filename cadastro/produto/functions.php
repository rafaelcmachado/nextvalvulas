<?php

require_once('../../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;
$imagem  = null;
$grupo    = null;
$ativo	   = null;

/**
 *  Listagem de Produtos
 */
function index() {
	global $customers;
	$customers = findProdutoIndex();
}

function indexBitola($id = null) {
	global $bitolas;
	$bitolas = findBitolaIndex($id);
}

function grupoFind() {
	global $grupo;
	$grupo = findGrupo();
}

/**
 *  Cadastro de Produtos
 */
function add() {

  if (!empty($_POST['customer'])) {

    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

		if (isset($_POST['inativo'])) {
			$ativo = ($_POST['inativo'] == '1') ? 1 : 0;
		}

    $customer = $_POST['customer'];
    $customer['dataCadastro'] = $today->format("Y-m-d H:i:s");

    save('produto', $customer);
		$nameImg = findUltimoProd();
		$imagem['caminho'] = saveImage($nameImg,1);
		if ( isset( $_FILES[ 'arquivo1' ][ 'name' ] ) && $_FILES[ 'arquivo1' ][ 'error' ] == 0 ) {

			$imagem['seq'] = 1;
			$imagem['idProduto'] = $nameImg();
			save('imagem_produto', $imagem);
		}

		$imagem['caminho'] = saveImage($nameImg,2);
		if ( isset( $_FILES[ 'arquivo2' ][ 'name' ] ) && $_FILES[ 'arquivo2' ][ 'error' ] == 0 ) {

			$imagem['seq'] = 2;
			$imagem['idProduto'] = $nameImg;
			save('imagem_produto', $imagem);
		}

		$imagem['caminho'] = saveImage($nameImg,3);
		if ( isset( $_FILES[ 'arquivo3' ][ 'name' ] ) && $_FILES[ 'arquivo3' ][ 'error' ] == 0 ) {

			$imagem['seq'] = 3;
			$imagem['idProduto'] = $nameImg;
			save('imagem_produto', $imagem);
		}

    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

  if (isset($_GET['id'])) {

    $id = $_GET['id'];
		 if (isset($_POST['inativo'])) {
			 $ativo = ($_POST['inativo'] == '1') ? 1 : 0;
		}

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];
			$customer['inativo'] = $ativo;

      update('produto', $id, $customer);

			$nameImg = $_GET['id'];
			$imagem['caminho'] = saveImage($nameImg,1);
			if ( strlen($imagem['caminho']) > 0 ) {

				$imagem['seq'] = 1;
				$imagem['idProduto'] = $_GET['id'];

				updateImg('imagem_produto', $id, 1, $imagem);
			}

			$imagem['caminho'] = saveImage($nameImg,2);
			if ( strlen($imagem['caminho']) > 0 ) {

				$imagem['seq'] = 2;
				$imagem['idProduto'] = $_GET['id'];

				updateImg('imagem_produto', $id, 2, $imagem);
			}

			$imagem['caminho'] = saveImage($nameImg,3);
			if ( strlen($imagem['caminho']) > 0 ) {

				$imagem['seq'] = 3;
				$imagem['idProduto'] = $_GET['id'];

				updateImg('imagem_produto', $id, 3, $imagem);
			}

      header('location: index.php');
    } else {

      global $customer;
      $customer = find('produto', $id);
    }
  } else {
    header('location: index.php');
  }
}

function saveImage($nomeIMG = null, $id = null) {

// verifica se foi enviado um arquivo

if ( (isset( $_FILES[ 'arquivo1' ][ 'name' ] ) && $_FILES[ 'arquivo1' ][ 'error' ] == 0)
 	OR (isset( $_FILES[ 'arquivo2' ][ 'name' ] ) && $_FILES[ 'arquivo2' ][ 'error' ] == 0)
	OR (isset( $_FILES[ 'arquivo3' ][ 'name' ] ) && $_FILES[ 'arquivo3' ][ 'error' ] == 0)) {

		if ($id == 1) {
			$nome = $_FILES[ 'arquivo1' ][ 'name' ];
			$arquivo_tmp = $_FILES[ 'arquivo1' ][ 'tmp_name' ];
		}elseif ($id == 2) {
			$nome = $_FILES[ 'arquivo2' ][ 'name' ];
			$arquivo_tmp = $_FILES[ 'arquivo3' ][ 'tmp_name' ];
		}elseif ($id == 3) {
			$nome = $_FILES[ 'arquivo3' ][ 'name' ];
			$arquivo_tmp = $_FILES[ 'arquivo3' ][ 'tmp_name' ];
		}

    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );

    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = $nomeIMG . $id . '.' . $extensao;

        // Concatena a pasta com o nome
				$destino = '../../img/produto/' . $novoNome;

        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            	return $novoNome;
        }
    }
	}
}

function deleteBitola($id = null, $idProd = null) {

  global $customer;
  $customer = remove('bitola', $id);

  header("location: prodview.php?id=$idProd");
}

function delete($id = null) {

  global $customer;
  $customer = remove('produto', $id);

  header('location: index.php');
}

function view($id = null) {
	global $customer;
	$customer = findProduto($id);
}
