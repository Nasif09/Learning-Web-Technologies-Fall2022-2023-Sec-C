<?php
session_start();
require_once('../../models/userModel.php');
//$status = $_SESSION['status']
?>

<html>
    <head>
        <!-- <title>Document</title> -->
    </head>
    <body>
        <?php
        echo "
        <table border='1'>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fathername</th>
                <th>Mothername</th>
                <th>Occupation</th>
                <th>Date of Barth</th>
                <th>Parmanet Address</th>
                <th>Branch</th>
                <th>Room</th>
            </tr>";
            $status=allUsers();
            while($row = mysqli_fetch_assoc($status)){
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['password']}</td>
                <td>{$row['fathername']}</td>
                <td>{$row['mothername']}</td>
                <td>{$row['occupation']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['parmanentaddress']}</td>
                <td>{$row['branch']}</td>
                <td>{$row['room']}</td>
            </tr>";
            }
        echo "</table>"
        ?>
    </body>
</html>