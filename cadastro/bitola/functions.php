<?php

require_once('../../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;
$imagem  = null;

/**
 *  Listagem de Clientes
 */
function index($id = null) {
	global $customers;
	$customers = findBitolaIndex($id);
}


/**
 *  Cadastro de Clientes
 */
function add($id = null) {

  if (!empty($_POST['customer'])) {

    $customer = $_POST['customer'];

    save('bitola', $customer);

		$id = $_GET['id'];

		$imagem['caminho'] = saveImage();
		if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {

			$imagem['idBitola'] = findUltimaBitola();
		}
		save('imagem_bitola', $imagem);

    header("location: ../produto/prodview.php?id=$id");
  }
}


function edit() {

	$idProd = $_GET['idProd'];

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];

      update('bitola', $id, $customer);
			header("location: ../produto/prodview.php?id=$idProd");

    } else {

      global $customer;
      $customer = find('bitola', $id);
    }
  } else {
		header("location: ../produto/prodview.php?id=$idProd");
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
				$destino = '../../img/bitola/ ' . $novoNome;

        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            	return $novoNome;
        }
    }
	}
}
