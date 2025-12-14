<?php require_once './Header.html';
require_once './DBConfig.php';
?>
<html>

<head>
    <title>CNCProduct</title>
    <link rel="stylesheet" href="./Astyle.css">
    <style type="text/css">
        .auto-style1 {
            width: 00px;
        }
        #linkmar {
            margin-inline-end: 16px;
            text-decoration: none;
        }
        #Aimgs {
            padding: 30px 30px 30px 30px;
        }
    </style>
</head>

<body>
    <div class="">
        <main><br><br><br>
            <table border="1" width="90%" align="center">
                <tr align="left">
                    <th>SignUp(Users) </th>
                    <th class="auto-style1">Products</th>
                    <th>Total Order</th>
                </tr>
                <tr align="center" width=100%>
                    <td id="Aimgs" width="33.33%">
                        <a href="./Manage-User.php" id="linkmar">
                        <?php
                            $a="SELECT * FROM users";
                            $result=mysqli_query($con,$a);
                            $signUpCount = $result->num_rows;
                            echo "<h1>"."$signUpCount"."<h1>";
                        ?><img src="./Images/signup-logo.png" height="50px" width="50px"  /></a>
                    </td>
                    <td id="Aimgs" width="33.33%">
                        <a href="./Manage-Product.php" id="linkmar">
                        <?php
                            $a="SELECT * FROM 	products";
                            $result=mysqli_query($con,$a);
                            $signUpCount = $result->num_rows;
                            echo "<h1>"."$signUpCount"."<h1>";
                        ?><img src="./Images/Product-Icon.png" height="50px" width="50px" /></a>
                    </td>
                    <td id="Aimgs" width="33.33%">
                    <a href="./Manage-Order.php" id="linkmar">
                        <?php
                            $a="SELECT * FROM orders";
                            $result=mysqli_query($con,$a);
                            $signUpCount = @$result->num_rows;
                            echo "<h1>"."$signUpCount"."<h1>";
                        ?><img src="./Images//Total-Order.jfif" height="50px" width="50px" /></a>
                    </td>
                </tr>
            </table>
        </main><br><br>
    </div>
</body>

</html>
<?php require_once './Footer.html'; ?>