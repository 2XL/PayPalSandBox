<?php
# BD connection
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'sce');

$link_bd = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD); 
if (!$link_bd) {
    die('No pudo conectarse: ' . mysql_error());
}
?>
