<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer  = null;

function view($id = null) {
	global $customers;
	$customers = findGrProduto($id);
}
