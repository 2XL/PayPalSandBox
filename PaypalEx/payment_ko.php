<?php
include('inc/app_load.php');

$sql = "SELECT * FROM product";
$rs = mysql_query($sql);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><h2>KOOOOO <?=$_GET["x"];?></h2>
       
    </body>
</html>
