<?php
define('DIR_BASE',__DIR__.'/../');
define('DIR_CONFIG',DIR_BASE.'Config/');
define('DIR_CONTROLLER',DIR_BASE.'Controller/');
define('DIR_MODEL',DIR_BASE.'Model/');
define('DIR_VIEW',DIR_BASE.'View/');
define('DIR_PUBLIC',DIR_BASE.'Public/');

define('BASE_HREF','/');

define('DB_HOST','mariadb');
define('DB_PORT',3006);
define('DB_NAME','pt1_MVC');
define('DB_USER','root');
define('DB_PASSWORD','root');

/* Avec Composer Autoload */
require_once DIR_BASE.'vendor/autoload.php';
require_once DIR_CONFIG.'routes.php';

?>