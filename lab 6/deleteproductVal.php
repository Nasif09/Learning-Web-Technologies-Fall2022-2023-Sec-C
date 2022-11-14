
<?php 
   session_start();
    $con = mysqli_connect('localhost', 'root', '', 'webtech');

    $RID = $_SESSION['RID'];
    $sql ="delete from addproducts where Id='$RID'";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Record Deleted from Database";
    }else{
        echo "Try Again";
    }

?> 