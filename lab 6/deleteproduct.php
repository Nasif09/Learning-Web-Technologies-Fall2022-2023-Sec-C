<?php 
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $RID = $_GET['rdid'];
    $_SESSION['RID']=$RID;
    $sql ="select * from addproducts where Id='$RID'";
    $_SESSION['rdid'] =  $_GET['rdid'];
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DELETE PRODUCT</title>
</head>
<body>
    <form action="deleteproductVal.php" method="post">
        <fieldset>
            <legend>DELETE PRODUCT</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td>:<?php echo $row['Name']?></td>;
                </tr>
                <tr>
                    <td>Buying Price</td>
                    <td>:<?php echo $row['BuyingPrice']?></td>;
                </tr>
                <tr>
                    <td>Selling Price</td>
                    <td>:<?php echo $row['SellingPrice']?></td>;
                </tr>
                <tr>
                    <td>Display</td>
                    <td>:<?php echo $row['Display']?></td>;
                </tr>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="delete" value="Delete"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>