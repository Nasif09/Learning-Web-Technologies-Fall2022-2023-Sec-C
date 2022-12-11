<?php

    session_start();
    require_once('../../models/userModel.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $occupation= $_POST['occupation'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $parmanentaddress = $_POST['parmanentaddress'];
    $dob = $_POST['dob'];
    $room = $_POST['room'];
    $furniture = $_POST['furniture'];
    $branch = $_POST['branch'];

    if($username == "" || $password == "" || $occupation == ""  || $branch == ""  || $room == ""  || $furniture == "" ){
        header('location: ../../views/manager/adduser.php?err=null');
    }else { 
        $user = ['username'=>$username, 'password'=>$password, 'fathername'=>$fathername, 'mothername'=>$mothername, 'occupation'=>$occupation, 'dob'=>$dob,'parmanentaddress'=>$parmanentaddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
        $status = insertUser($user);
        if($status){
            echo "<script>alert('New User Added')</script>";
            header('location: ../../views/manager/allusers.php');
        }else{
            echo "<script>alert('Error')</script>";
        }
    }

?>