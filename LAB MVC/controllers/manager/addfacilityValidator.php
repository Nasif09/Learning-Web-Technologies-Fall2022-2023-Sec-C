<?php
    session_start();
    require_once('../../models/userModel.php');

    $name = $_POST['name'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];
    
    if(isset($_POST['availability'])){
        $receive = "Yes";
    }else{
        $receive = "No";
    }
    
    if($name =="" || $price == ""){
        header('location: addfacility.php?err=null');
    }else { 
        $user = ['name'=>$name, 'price'=> $price, 'receive'=> $receive];
        $status = insertFacility($user);
        if($status){
            echo "<script>alert('Facility Added')</script>";
        }else{
            echo "<script>alert('Error')</script>";
        }
        
    }

?>