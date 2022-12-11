<?php
    require_once 'usermodel.php';
    $id = $_POST["id"];
    $name = $_POST["name"];
    $password = $_POST["pass"];
    $conpassword = $_POST["conpass"];
    $email = $_POST["email"];
    $type = $_POST["type"];

    if($name == "" ){
        header('location: registration.php?err=null');

    }else { 
        $user=['id'=>$id,'name'=>$name,'password'=>$password,'email'=>$email,'type'=>$type];
        $status=adduser($user);
        if($status){
            header('location: login.php');
        }else{
            echo "Error";
        }
    }
 
?>