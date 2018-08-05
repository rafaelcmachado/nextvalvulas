<?php

require_once('../../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;
$cidade    = null;
$ativo	   = null;

function index() {
	global $customers;
	$customers = findGeralIndex('grupo_produto');
}

function add() {

  if (!empty($_POST['customer'])) {

    $customer = $_POST['customer'];

    save('grupo_produto', $customer);
    header('location: index.php');
  }
}

function edit() {

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];

      update('grupo_produto', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('grupo_produto', $id);
    }
  } else {
    header('location: index.php');
  }
}

function delete($id = null) {

  global $customer;
  $customer = remove('grupo_produto', $id);

  header('location: index.php');
}

function view($id = null) {
	global $customer;
	$customer = findProduto($id);
}
