<?php

    session_start();
    require_once('../../models/userModel.php');
    
     $uid = $_SESSION['uid'];
    // $un = $_GET['un'];
    // $pass = $_GET['pass'];
    // $fn = $_GET['fn'];
    // $mn = $_GET['mn'];
    // $occ = $_GET['occ'];
    // $dob = $_GET['dob'];
    // $paddress = $_GET['paddress'];
    // $branch = $_GET['branch'];
    // $room = $_GET['room'];
    // $furniture = $_GET['furniture'];
    $username = $_POST['username'];
    // $password = $_POST['password'];
    $occupation= $_POST['occupation'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $parmanentaddress = $_POST['parmanentaddress'];
    $dob = $_POST['dob'];
    $room = $_POST['room'];
    $furniture = $_POST['furniture'];
    $branch = $_POST['branch'];

    // $user = ['un'=>$un, 'pass'=>$pass, 'fn'=>$fn, 'mn'=>$mn, 'occ'=>$occ, 'dob'=>$dob,'paddress'=>$paddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    // $status = editUser($user);
    $user = ['uid'=>$uid, 'username'=>$username, 'fathername'=>$fathername, 'mothername'=>$mothername, 'occupation'=>$occupation, 'dob'=>$dob,'parmanentaddress'=>$parmanentaddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    $status = updateUser($user);
    if($status){
        echo "updated";
    }else{
        echo "Error";
    }

?>
