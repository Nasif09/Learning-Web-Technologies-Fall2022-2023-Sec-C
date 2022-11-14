<?php
   
$con = mysqli_connect('localhost', 'root', '', 'webtech');
$sql ="select * from addproducts";
$result = mysqli_query($con, $sql);


$RID = $_GET['reid'];
$_SESSION['RID']=$RID;

$reid = $_GET['reid'];
$rn = $_GET['rn'];
$rbp = $_GET['rbp'];
$rsp = $_GET['rsp'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body>
    <form action="editVal.php" method="post">
        <fieldset>
            <legend>EDIT PRODUCT</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td>:<input type="text" name="name" value="<?php echo "$rn" ?>"></td>
                </tr>
                <tr>
                    <td>Buying Price</td>
                    <td>:<input type="text" name="bprice" value="<?php echo "$rbp" ?>"></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                    <td>:<input type="text" name="sprice" value="<?php echo "$rsp" ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="checkbox" value=""/>Display</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="SAVE"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
