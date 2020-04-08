<?php
session_start();

define('__ROOT__', dirname(dirname(__FILE__)));

//  
require_once(__ROOT__.'/config/connection.php'); 

# select DB
$bd_selected = mysql_select_db('paypalex', $link_bd);
if (!$bd_selected) {
    die ('Error al abrir la base de datos : ' . mysql_error());
}

# Php
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 0); 

$sql = "SET NAMES UTF8";
mysql_query($sql);

?>