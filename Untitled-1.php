<?php
include 'DBConfig.php';

if (isset($_POST['buy_now'])) {

  $proid = $_POST['product_id'];
  $quant = $_POST['Quanti'];
  $tprice = $_POST['product_amount'];

  $total_price = $quant * $tprice;

  echo "Product ID: " . $proid . "<br>" . "Product Quantity: " . $quant . "<br>" . "Product Price:" . $tprice . "<br>" . "Ttal Price=" . $total_price . "<br>" ;

} else {
  echo "Product not found.";
}
?>
<html>
    <head>
        <title>Booking </title>
    </head>
</html>
