<?php require_once './Header.html'; ?>
<html>

<head>
    <title>WWW.CNCProducts.com/Admin/Manage Order</title>
</head>

<body>
    <!-- Delete Table start -->
    <th>
        <form method="POST" enctype="multipart/form-data" action="#"><br><br><br>
            <table border=3 align="center" class="Inse" width=20%>
                <tr>
                <tr>
                    <td colspan="2" align=center>
                        <h2> Cancle Order</h2>
                    </td>
                </tr>
                <tr>
                    <td>Order ID</td>
                    <td><input type="number" name="Proid" placeholder="Order ID" required></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" name="Delete" value="Delete">
                        <input type="reset" name="Clear" value="clear">
                    </td>
                </tr>

    </th>
    <?php
    // Delete Product PHP Code
    include './DBConfig.php';
    if (isset($_POST['Delete'])) {
        $pid = $_POST['Proid'];
        //$sql="DELETE FROM products WHERE productid='$pid'";
        $sql = "DELETE from products where productid='$pid' " or die("Order Not delete Please Try Again");
        $result = mysqli_query($con, $sql);
        echo "<script>alert('Order Cancled successfully.');window.location.href='Manage-Order.php'</script>";
    }
    ?>
    <!-- Delete table Over -->
    </table>
    </form>
    <!-- Grid View ON Product TB --><br><bR><br>
    <table border="3" align="center" class="Inse">
        <tr>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Customer Name</th>
            <th>Phone No.</th>
            <th>E-Mail</th>
            <th>Address</th>
            <th>Date</th>
            <th>Card No.</th>
            <th>CVV No.</th>
        </tr>
        <?php
        //Display Users Record
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {

            echo "<tr><td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
            echo "<td>$row[6]</td>";
            echo "<td>$row[7]</td>";
            echo "<td>$row[8]</td></tr>";
            
            
        }
        echo "</table><br><br>";
        ?>
    </table>
    </form>
</body>

</html>


<?php require_once './Footer.html'; ?>