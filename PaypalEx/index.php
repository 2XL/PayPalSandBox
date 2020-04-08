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
    <body>
        <h2>Productos estrella</h2>
        <?php
        while($row = mysql_fetch_array($rs)) {
            
            echo '<a href="product.php?id='.$row['id'].'">'.$row['name'].'</a><br>';
        }
        ?>
    </body>
</html>
