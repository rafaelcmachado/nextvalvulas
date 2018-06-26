<?php
require_once 'config.php';
require_once(DBAPI);
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['email'];
$senha = md5($_POST['senha']);
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = open_database();
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = $con->query("SELECT `idPrivilegio` FROM `login` WHERE `email` = '$login' AND `senha`= '$senha'");
$row = mysqli_fetch_row($result);
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows($result) > 0 )
{
$_SESSION['previlegio'] = $row[0];
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:teste.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    unset ($_SESSION['previlegio']);
    header('location:index.php');
    }
?>
