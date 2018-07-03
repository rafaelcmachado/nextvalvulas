<?php

require_once('../../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;
$imagem  = null;
$grupo    = null;
$ativo	   = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = findProdutoIndex();
}

function grupoFind() {
	global $grupo;
	$grupo = findGrupo();
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['customer'])) {

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $customer = $_POST['customer'];
    $customer['dataCadastro'] = $today->format("Y-m-d H:i:s");

    save('produto', $customer);
		$imagem['caminho'] = saveImage();
		$imagem['seq'] = 1;
		$imagem['idProduto'] = findUltimoProd();

		save('imagem_produto', $imagem);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {



  if (isset($_GET['id'])) {

    $id = $_GET['id'];
		 if (isset($_POST['ativo'])) {
			 $ativo = ($_POST['ativo'] == '1') ? 1 : 0;
		}

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];
			$customer['inativo'] = $ativo;
      update('produto', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('produto', $id);
    }
  } else {
    header('location: index.php');
  }
}

function saveImage() {

// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {

    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];

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
        $novoNome = uniqid ( time () ) . '.' . $extensao;

        // Concatena a pasta com o nome
				$destino = '../../img/produto/ ' . $novoNome;

        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            	return $novoNome;
        }
    }
	}
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $customer;
  $customer = remove('produto', $id);

  header('location: index.php');
}
