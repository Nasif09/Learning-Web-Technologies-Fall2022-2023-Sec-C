<?php

    session_start();
    require_once('../models/userModel.php');

    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $occupation= $_POST['occupation'];
    $room = $_POST['room'];
    $furniture = $_POST['furniture'];
    $branch = $_POST['branch'];

    
    $status = insertUser($user);

    if($username == "" || $password == "" || $occupatio == ""  || $room == ""  || $furniture == "" ){
        header('location: ../view/adduser.php?err=null');
    }else { 
        $user = ['username'=>$username, 'password'=>$password, 'occupation'=>$occupation, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
        $status = insertUser($user);
        if($status){
            echo "User added";
        }else{
            echo "Error";
        }
    }

?>