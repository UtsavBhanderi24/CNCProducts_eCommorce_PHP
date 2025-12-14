<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="./style.css">
  <title>CNCProduct/Milling Part</title>
</head>

<body>
  <!-- <div class="browser"> -->
  <link rel="stylesheet" href="./styles.css">
  <?php include 'Header1.html'; ?><br><br>
  <ul width="60%" margin-left="40px" >
    <a href="./index.php"><span> Home </span></a> / <a href="./Categories.php" ><span> Categories</span></a> / <a href="./Milling-Part.php"><span>MILLING PART</span></a>
  </ul>
  <?php

  require_once 'DBConfig.php';

  $sql = "SELECT productid,productname,Category,ProImg,productdetails,productprice FROM products WHERE Category='MILLING PART' ";
  $result = $con->query($sql);
  
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
      <table>
        <!-- design -->
        <form method="POST" action="./Booking.php">
          <table border=3 width=80% align=center>
            <tr>
            <div class="imagePart1" align="center">
              <th width=30%><img src="./Admin/DB-Pro-Img/<?php echo $row['ProImg']; ?>" width="400px" height=400px > </th>
            </div>
              <th align="left">
                <h4>
                


                  Category=<?php echo $row['Category']; ?>.<br>
                  Name=<?php echo $row['productname']; ?>.<br>
                  <?php echo $row['productdetails']; ?>.<br>
                  Price=<?php echo $row['productprice']; ?>.<br><br><br><br><bR><BR>

                  <input type="number" minlength="1" name="Quanti" placeholder="Enter Quantity" value="1" required><br><br><br>
                  <input type="hidden" name="product_id" value="<?php echo $PID="$row[productid]" ?> "><br>
                  <input type="hidden" name="product_nm" value="<?php echo $PID="$row[productname]" ?> "><br>
                  <input type="hidden" name="product_amount" value="<?php echo "$row[productprice]" ?> "><br>
                  <input type="hidden" name="pro_img" value="<?php echo "$row[ProImg]" ?> "><br>

               
                  <input type='submit' name='buy_now' value='Buy Now'>
                  <!-- <a href="./Process/add_to_cart.php"><img src="./Images/Header_cart.svg" align="absmiddle" alt="Add TO Cart" title="Add to cart">Add cart </img></a><br><br> -->
                  <hl>
                    <!-- <a href="./Process/Payment.php"><img src="./Images/Header_cart.svg" align="center" alt="Buy Now" title="Buy Now">Buy Now</img></a> -->


                </h4>
              </th>
            </tr>
          </table>
        </form>
    <?php }
  } else {
    echo "0 results";
  } ?>
    <?php include 'Footer.html'; ?>
    </div>
</body>

</html>