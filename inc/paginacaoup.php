<?php include_once("database.php");
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os cursos da tabela
$result_curso = "SELECT
											p.id,
											p.nome,
				concat(\"R$\",p.preco) as preco,
											g.nome as grupo,
					DATE_FORMAT(p.dataCadastro, \"%d/%m/%Y\") as dataCadastro,
									 IF(p.inativo = 0, \"Sim\", \"Não\") as inativo
				from      produto p
				left join grupo_produto g on g.id = p.idGrupo";
$resultado_curso = mysqli_query( open_database(), $result_curso);

//Contar o total de cursos
$total_cursos = mysqli_num_rows($resultado_curso);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_cursos/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$result_cursos = "SELECT
											p.id,
											p.nome,
				concat(\"R$\",p.preco) as preco,
											g.nome as grupo,
					DATE_FORMAT(p.dataCadastro, \"%d/%m/%Y\") as dataCadastro,
									 IF(p.inativo = 0, \"Sim\", \"Não\") as inativo
				from      produto p
				left join grupo_produto g on g.id = p.idGrupo limit $incio, $quantidade_pg";
$resultado_cursos = mysqli_query(open_database(), $result_cursos);
$total_cursos = mysqli_num_rows($resultado_cursos);

?>
