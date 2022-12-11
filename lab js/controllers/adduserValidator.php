<?php

    session_start();
    require_once('../models/userModel.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $occupation= $_POST['occupation'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $parmanentaddress = $_POST['parmanentaddress'];
    $DOB = $_POST['dob'];
    $room = $_POST['room'];
    $furniture = $_POST['furniture'];
    $branch = $_POST['branch'];

    if($username == "" || $password == "" || $occupation == ""  || $room == ""  || $furniture == "" ){
        
        header('location: ../view/adduser.php?err=null');
    }else { 
        $user = ['username'=>$username, 'password'=>$password, 'fathername'=>$fathername, 'mothername'=>$mothername, 'occupation'=>$occupation, 'DOB'=>$DOB,'parmanentaddress'=>$parmanentaddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
        $status = insertUser($user);
        if($status){
            echo "User added";
        }else{
            echo "Error";
        }
    }

?>
<!-- <script>
    function validateusername() {
    let username = document.forms["myForm"]["username"].value;
    if (username == "") {
        alert("Name must be filled out");
        return false;
    }
    }
</script> -->