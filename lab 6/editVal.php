<?php
  session_start();
    if($_POST['submit']){

        $name = $_POST['name'];
        $bprice = $_POST['bprice'];
        $sprice = $_POST['sprice'];
        
        $RID=$_SESSION['RID'];

        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql ="update addproducts set Name='$name', BuyingPrice='$bprice', SellingPrice='$sprice' where Id='$RID'";
        $data = mysqli_query($con,$sql);
        if($data){
            echo "data updated";
        }else{
            echo "Try Again";
        }

    }

?>