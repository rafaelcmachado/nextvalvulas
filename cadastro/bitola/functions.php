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

    header("location: ../produto/prodview.php?id=$id");
  }
}


function edit() {

	$idProd = $_GET['idProd'];

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['customer'])) {



      $customer = $_POST['customer'];
			$customer['idProduto'] = $idProd;
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
