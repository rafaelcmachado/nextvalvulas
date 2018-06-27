<?php

require_once('../../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;
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
		if(isset($_FILES['arquivo']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

      $ext = strtolower(substr($_FILES['arquivo']['name'],-4)); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
      $dir = 'uploads/'; //Diretório para uploads

      move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   }

    $today =
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $customer = $_POST['customer'];
    $customer['dataCadastro'] = $today->format("Y-m-d H:i:s");

    save('produto', $customer);
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
			$customer['ativo'] = $ativo;

      update('cliente', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('cliente', $id);
    }
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $customer;
  $customer = remove('cliente', $id);

  header('location: index.php');
}
