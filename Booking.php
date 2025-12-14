<html>
<?php include 'Header1.html';
include 'DBConfig.php';
?>

<head>
    <style>
        .input-group {
            align-items: center;
            width: 80%;
            overflow: auto;
        }
    </style>
    <title>CNCProduct/Booking</title>
</head>

<body>
    <table border="" align=center width=80%>
        <tr>
            <th>
                <?php
                include 'DBConfig.php';

                if (isset($_POST['buy_now'])) {
	
                    $proid = $_POST['product_id'];
                    $pnm=$_POST['product_nm'];
                    $quant = $_POST['Quanti'];
                    $tprice = $_POST['product_amount'];
                    $im = $_POST['pro_img'];
                    $total = $tprice * $quant;
	//echo $proid;

                }
                ?>
	

                <img src="./Admin/DB-Pro-Img/<?php echo $im; ?>" width="300px" height="400px"><br>
                <?php echo  "Product ID:".$proid."<br>"."Product Name:".$pnm."<br>"."Product Quantity: " . $quant . "<br>" . "Product Price:" . $tprice . "<br>" ."Total :". $total . "<br>"; ?>
                


            </th>
            <th>
                <form action="./invoice.php" method="POST" align=center><br>
                    <div class="input-group">
                        <input type="text" id="name" name="cname" required placeholder="Customer Name">
                        Customer Name
                    </div>
                    <div class="input-group">
                        <input type="text" id="number" name="phoneno" required minlength="10" maxlength="10" placeholder="Phone No.">
                        Phone no.
                    </div>
                    <div class="input-group">
                        <input type="email" id="email" name="email" required placeholder="E-Mail">
                        Email
                    </div>
                    <div class="input-group">
                        <input type="text" id="add" name="add" required placeholder="Address"></textarea>
                        Address
                    </div>
                    <div class="input-group">
                        <input type="Date" id="date" name="dt" required minlength="10" maxlength="10" placeholder="Current Date">
                        Date
                    </div>
                    <div class="input-group">
                        <input type="text" id="no" name="card" required minlength="12" maxlength="12" placeholder="Card No.">
                        Card no.
                    </div>
                    <div class="input-group">
                        <input type="text" id="cvv" name="cvv" required minlength="3" maxlength="3" placeholder="CVV No.">
                        Cvv no.
                    </div><br><br>
                    <input type="submit" name="Confirm" value="Confirm"><br>
	<input type="hidden" name="prod_id" value="<?php  echo $proid; ?>"> <br>
                <input type="hidden" name="prod_qty" value="<?php echo $quant; ?> "><br>
                <input type="hidden" name="prod_price" value="<?php echo $tprice;  ?> "><br>
                <input type="hidden" name="prod_nm" value="<?php echo $pnm;  ?> "><br>
                </form>
            </th>

        </tr>
    </table>

</body>
<?php include 'Footer.html'; ?>

</html>