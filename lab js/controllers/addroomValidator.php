<?php

    session_start();
    require_once('../models/userModel.php');

    $roomno = $_POST['roomno'];
    $roomtype = $_POST['roomtype'];
    $branchname = $_POST['branchname'];
    
    if($roomno == ""){
        header('location: ../views/addroom.php?err=null');

    }else { 
        $user = ['roomno'=>$roomno, 'roomtype'=> $roomtype, 'branchname'=> $branchname];
        $status = insertRoom($user);
        if($status){
           echo "success";
        }else{
            echo "error!";
        }
        
    }

?>