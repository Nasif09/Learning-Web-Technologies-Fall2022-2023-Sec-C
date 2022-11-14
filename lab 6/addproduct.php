<?php 

    if(isset($_GET['err'])){
        
        if($_GET['err'] == 'null'){
            echo "Fill all fields";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>
    <form action="addproductVal.php" method="post">
        <fieldset>
            <legend>ADD PRODUCT</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td>:<input type="text" name="name" value=""></td>
                </tr>
                <tr>
                    <td>Buying Price</td>
                    <td>:<input type="text" name="bprice" value=""></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                    <td>:<input type="text" name="sprice" value=""></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="display" value="Yes"/>Display</td>
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
