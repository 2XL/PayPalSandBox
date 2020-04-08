<?php
include('inc/app_load.php');

$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE id = " . $id;

$row = mysql_fetch_row(mysql_query($sql));
?>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>VendoMucho.com</title>
    </head>
    <body>
        <h2><?= $row[1] ?></h2>
        <img src="img/<?= $row[0] ?>.jpg" width="300"/>
        <p><?= $row[2] ?></p>
        <p style="color:#00cc00; font-weight: bold; font-size: 16px;"><?= $row[3] . ",00&euro;" ?></p>

        <form name="_xclick" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="sce@europe.cc">
            <input type="hidden" name="currency_code" value="EUR">
            <input type="hidden" name="item_name" value="<?= $row[1] ?>">
            <input type="hidden" name="amount" value="<?= $row[3] ?>">
            <input type="hidden" name="rm" value="2">
            <input type="hidden" name="notify_url" value="http://localhost/PaypalEx/order_processor.php">
            <input type="hidden" name="return" value="http://localhost/PaypalEx/payment_ok.php">
            <input type="hidden" name="cancel_return" value="http://localhost/PaypalEx/payment_ko.php?id_order=ValorParametreX">
            <input type="image" src="http://www.paypalobjects.com/es_XC/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
        </form>
    </body>
</html>
