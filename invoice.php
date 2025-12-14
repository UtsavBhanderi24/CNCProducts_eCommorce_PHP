<html>
<?php include 'Header1.html'; ?>

<head>
    <title>CNCProduct/Invoice</title>

</head>

<body>

    <!-- INsert Boooking Information -->
    <?php
    include('DBConfig.php');
    if (isset($_POST['Confirm'])) {
        $cn = $_POST['cname'];
        $pno = $_POST['phoneno'];
        $email = $_POST['email'];
        $add = $_POST['add'];
        $dt = $_POST['dt'];
        $card = $_POST['card'];
        $cvv = $_POST['cvv'];

        $proi = $_POST['prod_id'];

        $pnm = $_POST['prod_nm'];
        $q = $_POST['prod_qty'];
        $p = $_POST['prod_price'];
        $sub_tot = $q * $p;
        $total_tax = $sub_tot + 18 / 100;
        $tot = $sub_tot + $total_tax;

      
        $insert = "INSERT INTO `booking` (`orderid`, `proid`, `cname`, `phoneno`, `email`, `address`, `date`, `cardno`,cvvno) VALUES (NULL, '$proi', '$cn', '$pno', '$email', '$add', CURRENT_DATE(), '$card','$cvv')";
        $result1 = mysqli_query($con, $insert);
}
?>
       <!--- Product ---> 
        <center>
        <h1 style="font-size: 35px;"><u>Invoice<u></h1>
        </center>
        <center>

        <table border="1" align="center" style="height: 426px; width: 427px;text-align:center;font-size:x-large;">

        <tr>
        <td>Name</td>
        <td><?php echo ($cn); ?></td>
        </tr>
        <tr>
        <td>Phone No.</td>
        <td><?php echo ($pno); ?></td>
        </tr>
        <tr>
          <td>E-Mail</td>
          <td><?php echo ($email); ?></td>
        </tr>
        <tr>
        <td>Address</td>
        <td><?php echo ($add); ?></td>
        </tr>
        <tr>
        <td>Date</td>
          <td><?php echo ($dt); ?></td>
        </tr>
        <tr>
        <td>Product Name</td>
               <td><?php echo ($pnm); ?></td>
            </tr>
        <tr>
        <td>Quantity</td>
        <td><?php echo ($q); ?></td>
            </tr>
       <tr>
               <td>Price</td>
       <td><?php echo ($p); ?></td>
       </tr>
       <tr>
       <td>Total Tax</td>
               <td><?php echo ($total_tax); ?></td>
       </tr>
       <tr>
       <td>Total Amount Paid</td>
               <td><?php echo ($tot); ?></td>
           </tr>
</table>

        </div>
        </section>
</body>
<?php include 'Footer.html'; ?>
</html>