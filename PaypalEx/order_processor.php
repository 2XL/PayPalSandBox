<?php
include('inc/app_load.php');

$sql = "Insert INTO orders (status) VALUES ('".$_POST["payment_status"]."')";
mysql_query($sql);
?>
