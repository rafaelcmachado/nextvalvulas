<?php

require_once('../../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;

/**
 *  Listagem de Produtos
 */
function index() {
	global $customers;
	$customers = findProdutoIndex();
}

function view($id = null) {
	global $customer;
	$customer = findProduto($id);
}

function indexBitola($id = null) {
	global $bitolas;
	$bitolas = findBitolaIndex($id);
}

function grupoBitola($id = null) {
	global $grupo;
	$grupo = findBitola($id);
}
