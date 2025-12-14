<?php require_once './Header.html';
    include('DBConfig.php');
?>

<html>

<head>
    <title>CNCProduct/Admin/Product..Insert</title>
    <!-- <link rel="stylesheet" src="./Astyle.css"> -->
</head>

<body>

    <br><br><br><br>
    <table border=3 align="center" width=100%>
        <!-- Insert Table Start -->
        <th>
            <form method="POST" enctype="multipart/form-data" action="#">
                <table border=3 align="center" class="Inse"><br>
                    <tr>
                        <td colspan="2" align=center>
                            <h2> Insert Products</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Product Name</td>
                        <td><input type="text" name="pronm" placeholder="Product Name" value="" required></td>
                    </tr>
                    <tr>
                        <td>Product Image</td>
                        <td><input type="file" name="Pimg" accept="image/*" value="Browser" required></td>
                    </tr>
                    <tr>
                        <td>Product Details</td>
                        <td><textarea name="pdesc" placeholder="Product Details" required></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Product Category</td>
                        <td><select name="ctgry">
                                <option>Automotive Components</option>
                                <option>Brass Forged Components</option>
                                <option>CNC Components</option>
                                <option>Copper Parts</option>
                                <option>VMC Components</option>
                                <option>MILLING PART</option>
                            </select>
                        </td>
                    <tr>
                    <tr>
                        <td>Product Price</td>
                        <td><input type="number" name="Proprice" placeholder="Product Price" value="" required></td>
                    </tr>
                    <tr>
                        <td>Product Quantity</td>
                        <td><input type="number" name="proquentity" placeholder="Product Quantity" value="" required></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="submit" name="add" value="Insert">
                            <input type="reset" name="Clear" value="clear">
                        </td>
                    </tr>
                    <?php
                    error_reporting(0);
                    // INsert Record Php Code
                    if (isset($_POST['add'])) {

                        $proname = $_POST['pronm'];
                        $proimage = $_FILES['Pimg']['name'];
                        $prodeta = $_POST['pdesc'];
                        $cate = $_POST['ctgry'];
                        $pprice = $_POST['Proprice'];
                        $proqty = $_POST['proquentity'];

                        $sql = "INSERT INTO products(productname,ProImg,productdetails,Category,productprice,quantity) VALUES ('$proname','$proimage','$prodeta','$cate','$pprice','$proqty')" or die("<br>" . "record Not inserted");

                        if ($con->query($sql) === TRUE) {
                            echo "<script>alert('Added successfully.');window.location.href='Manage-Product.php'</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                    }
                    ?>
                </table><br><br>
            </form>
            <!-- Insert Table Over -->
        </th>
        
        <!-- Delete Table start -->
        <th>
            <form method="POST" enctype="multipart/form-data" action="#">
                <table border=3 align="center" class="Inse">
                    <tr>
                    <tr>
                        <td colspan="2" align=center>
                            <h2> Delete Products</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>Product ID</td>
                        <td><input type="number" name="Prid" placeholder="Product ID" required></td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"><input type="submit" name="Delete" value="Delete">
                            <input type="reset" name="Clear" value="clear">
                        </td>
                    </tr>
                </table>
            </form>
        </th>
        <?php
        // Delete Product PHP Code
        if (isset($_POST['Delete'])) {
            $pdid = $_POST['Prid'];
            
            $sql = "DELETE FROM products WHERE productid=$pid=$_POST[Prid]" or die("Product Not delete Please Try Again");
            $result = mysqli_query($con, $sql);
            echo "<script>alert(' Deleted  successfully.');window.location.href='Manage-Product.php'</script>";
        }
        ?>
        <!-- Delete table Over -->
    </table>
    <?php
    // // Update Record Php Code
    // if (isset($_POST['Update'])) {
    //     $pid = $_POST['Proid'];
    //     $proname = $_POST['pronm'];
    //     $proimage = $_FILES['Pimg']['name'];
    //     $prodeta = $_POST['prodetail'];
    //     $cate = $_POST['ctgry'];
    //     $Pprice = $_POST['Proprice'];
    //     $proqty = $_POST['proquentity'];

        
    //     $sql = "UPDATE products set productname='$proname',Category='$cate',ProImg='$proimage',productdetails='$prodeta',productprice='$pprice',quantity='$proqty' where productid='$pid'" or die("Product Not Updated Please Try Again");
    //     $result = mysqli_query($con, $sql);
    //     echo "<script>
    //     alert(' Updated  successfully.');
    //     window.location.href = 'Manage-Product.php'</script>";
    // }
    ?>
    <!-- Grid View ON Product TB -->
    <table border="3" align="center" class="Inse">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Categories</th>
            <th>Product Image</th>
            <th>Details</th>
            <th>Price Per Piece</th>
            <th>Quantity</th>
        </tr>
        <?php
        //Display Users Record
        $sql = "SELECT * FROM products";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($result)) {

            echo "<tr><td>" . $row['0'] . "</td>"; //ID
            echo "<td>" . $row['1'] . "</td>";     //Name
            echo "<td>" . $row['2'] . "</td>";    //Categories
            echo "<td><img src='./DB-Pro-Img/".$row['3']."' height=100px width=100px alt='Image'></td>";
            //echo "<td>" . "<img src=./DB-Pro-Img/". $row['3'] . "width=100px height=100px >" . "</td>"; //image  
            echo "<td>" . $row['4'] . "</td>";    //Details
            echo "<td>" . $row['5'] . "</td>";    //Price
            echo "<td>" . $row['6'] . "</td></tr>"; //Quantity
        }
        echo "</table><br><br>";
        ?>
    </table>
    </form>
</body>

</html>

<?php require_once './Footer.html'; ?>