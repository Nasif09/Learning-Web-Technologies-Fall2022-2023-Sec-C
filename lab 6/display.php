
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DISPLAY</title>
</head>
<body>
    <form>
        <fieldset>
            <legend>DISPLAY</legend>
            <?php 

                $con = mysqli_connect('localhost', 'root', '', 'webtech');

                $sql ="select * from addproducts";
                $result = mysqli_query($con, $sql);

                echo "<table border=1>
                <tr>
                <th>Name</th>
                <th>Selling Price</th>
                <th colspan='2'></th>
                </tr> ";

                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                    <td>{$row['Name']}</td>
                    <td>{$row['SellingPrice']}</td>
                    <td><a href='editproduct.php?reid=$row[Id] & rn=$row[Name] & rbp=$row[BuyingPrice]& rsp=$row[SellingPrice]'>edit</td>
                    <td><a href='deleteproduct.php?rdid=$row[Id]'>delete</td>
                    </tr>";
                }
                echo "</table>";

            ?>
        </fieldset>
    </form>
</body>
</html>