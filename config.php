<?php

/** O nome do banco de dados*/
define('DB_NAME', 'upmarkvi_nextvalvulas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'upmarkvi_next');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'n3x1v');

/** nome do host do MySQL */
define('DB_HOST', 'upmarkvision.com.br');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
define('LOGIN_TEMPLATE', ABSPATH . 'inc/login.php');
define('ADM_TEMPLATE', ABSPATH . 'inc/adm.php');
define('USER_TEMPLATE', ABSPATH . 'inc/user.php');
