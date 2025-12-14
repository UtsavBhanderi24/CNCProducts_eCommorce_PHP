<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prj";

$con = new mysqli($servername, $username, $password, $dbname) or die("Connection Failed");
// echo "connected <br><br>" ;
//$_SESSION['username'];
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>