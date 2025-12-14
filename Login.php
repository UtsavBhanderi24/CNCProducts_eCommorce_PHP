<!DOCTYPE html>
<html lang="en">

<head>
    <title>
    CNCProduct/Login
    </title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body style="background-image: url('./Admin/Images/cnc-drill-drilling-machine.jpg')">
<table>
    <div class="browser">
        <div class="login-container">
            <div class="form-container" width=100%>
                <h1>Login</h1>
                <form action="#" method="post">

                    <!-- User Name -->
                    <input type="text" name="uname" placeholder="User Name" required><br>

                    <!-- Password -->
                    <input type="password" name="pass" placeholder="Password" required minlength="4" maxlength="13"><br>

                    <button type="submit">Login</button><br>
                    Don't have an account ? <a href="Register.php"> Create New Account </a><br><br>
                </form>
            </div>
        </div>
    </div>
    <?php
    error_reporting(0);
    include("DBConfig.php");



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $e = mysqli_real_escape_string($con, $_POST['uname']);
        $p = mysqli_real_escape_string($con, $_POST['pass']);

        $e = $_POST['uname'];
        $p = $_POST['pass'];
        $sql = "SELECT * FROM users WHERE UserName = '$e' AND Password = '$p'" or die("Not Fetch Record");
        $result = $con->query($sql);

        if ($result) {
            echo "<script>alert('Welcome to www.CNCProducts.com');window.location.href='Index.php'</script>";
            include './Index.php';
        } else {
            echo "<script>alert('email and Password does not match.');window.location.href='Login.php'</script>";
        }
    }
    ?>
</table>
</body>