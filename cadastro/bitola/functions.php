<?php

require_once('../../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;
$cidade    = null;
$ativo	   = null;

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

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {



  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];

      update('bitola', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('bitola', $id);
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
  $customer = remove('bitola', $id);

  header('location: index.php');
}

function view($id = null) {
	if (isset($_GET['id'])) {
		global $customers;
		$customers = findBitola($id);
	} else {
		header('location: ../produto/index.php');
	}
}
