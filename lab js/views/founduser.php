<?php
session_start();
require_once('../models/userModel.php');
$status = $_SESSION['status']
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
            if($status){
            echo "<tr>
                <td>{$status['id']}</td>
                <td>{$status['username']}</td>
                <td>{$status['password']}</td>
                <td>{$status['fathername']}</td>
                <td>{$status['mothername']}</td>
                <td>{$status['occupation']}</td>
                <td>{$status['dob']}</td>
                <td>{$status['parmanentaddress']}</td>
                <td>{$status['branch']}</td>
                <td>{$status['room']}</td>
            </tr>";
            }
        echo "</table>"
        ?>
    </body>
</html>