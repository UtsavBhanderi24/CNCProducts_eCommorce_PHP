<!DOCTYPE html>
<html>

<head>
    <title>Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="./Astyle.css">
</head>

<!-- <body style="background-image: url('./Images/cnc-drill-drilling-machine.jpg');"> -->

<body>
    <div class="browser">
        <div class="login-container">
            <div class="form-container">
                <h2>Admin Login</h2>
                <form action="#" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required><br><span><i id="toggler" class="far fa-eye"></i></span><br>
                    <button type="submit">Login</button><br>
                </form>
            </div>
        </div>
    </div>
    <?php
    // session_start();
    require_once 'DBConfig.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE AUserName = '$username' AND APassword = '$password'";
        $result = $con->query($sql);

        if ($result->num_rows == 1) {
            echo "<script> alert('Login Sucessfully'); </script>";
            include './AIndex.php';
        } else {
            echo "<script> alert('Invalid Username & Password'); </script>";
            include './Login.php';
        }
    }
    ?>

</body>

</html>