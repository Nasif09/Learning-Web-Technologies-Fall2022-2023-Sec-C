<?php

    session_start();
    $name = $_POST['name'];
    $bprice = $_POST['bprice'];
    $sprice = $_POST['sprice'];
    
    if(isset($_POST['display'])){
        $receive = "Yes";
    }else{
        $receive = "No";
    }
    
    if($name =="" || $bprice == "" || $sprice == "" ){
        header('location: addproduct.php?err=null');
    }
    else{
        $con = mysqli_connect('localhost','root','','webtech');
        $sql = "insert into addproducts values('','{$name}','{$bprice}','{$sprice}','{$receive}')";
        $status = mysqli_query($con, $sql);

        if($status){
            header('location: display.php');
        }else{
            echo "Eerror";
        }
    }

?>