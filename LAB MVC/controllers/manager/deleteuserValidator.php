<?php

    session_start();
    require_once('../../models/userModel.php');

    $uid = $_GET['uid'];
    $user = ['uid'=>$uid];
    $status = deleteUser($user);
    if($status){
        echo "<script>alert('User Deleted')</script>";
        header('location: ../../views/manager/allusers.php');
    }else{
        echo "<script>alert('Error')</script>";
    }

?>
