<?php
require_once './Header.html';
require_once 'DBConfig.php';
?>

<body><br><br><br><br>
<title>CNCProduct/Admin/Manage-User</title>
    <form method="post" action="#">
        <table border=1 align=center width=50% class="Inse">
            <tr>
                <th>
                    <h3>Delete User</h3><br>
                </th>
            </tr>
            <tr>
                <td align="center">
                    Enter User ID For Delete User
                    <input type="number" name="deuser" placeholder="User ID For Delete User"><br><br>
                    <input type="submit" name="delete-user" value="Delete User">
                </td>
            </tr>
        </table>
    </form>
    <?php
    ?>
    <br><br><br>
    <table border=1 align=center class="Inse">
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>E-Mail</th>
            <th>Phone Number</th>
            <th>Delete</th>
        </tr>
</body>
<?php


$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_row($result)) {
    echo "<tr><td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    
    echo '<td><a href="#">Delete</td></tr>';
}
$sql = "DELETE FROM users where Userid='$row[0]'";
    $r = mysqli_query($con, $sql);
echo "</table><br><br>";

//DELETE USER Record
// $deluser = $_POST['deuser'];
//     $sql = "DELETE FROM users where Userid='$row[0]'";
//     $r = mysqli_query($con, $sql);
    


require_once './Footer.html';
?>