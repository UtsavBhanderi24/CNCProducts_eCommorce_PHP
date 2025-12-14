<html>

<head>
    <title>CNCProduct/Register
    </title>
</head>

<body style="background-image: url('./Admin/Images/cnc-drill-drilling-machine.jpg')">
    <link rel="stylesheet" href="./style.css">
    <div class="browser">
        <div class="login-container">
            <div class="form-container">
                <h2>Register</h2>
                <form action="#" method="post">
                    <input type="hidden" name="sessionid">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="number" name="m_no" placeholder="Mobile Number" required minlength="10" maxlength="12">
                    <input type="email" name="mail" placeholder="E-Mail" required>
                    <input type="password" name="password" placeholder="Password" required minlength="6" maxlength="10">
                    <!-- Forget Password?<a href="./Forget-Password.html">Here</a><br> -->
                    <button type="submit">Register</button><br>
                    Already Have An Account?<a href="./Login.php">Login Now</a>
                </form>
            </div>
        </div>
    </div>

    <?php
    require_once 'DBConfig.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['m_no'];
        $email = $_POST['mail'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO users (UserName,Phno,Email,Password) VALUES ('$username', '$password', '$email','$pass')";
        $result="";
        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Registration successful.');window.location.href='Login.php'</script>";
            // echo "Registration successful.";
            // echo "
            // windows.location.href(./Login.php);";
            // include 'Login.php';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    ?>
</body>

</html>