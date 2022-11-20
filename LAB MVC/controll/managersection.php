<?php
session_start();
    if(!isset($_POST['mngopt'])){
        $_SESSION['mngopterr'] = "Select radio options properly";
        header('location: ../mangerdashboard.php');

        $opt=$_POST['mngOpt'];
        $chc=$_POST[$opt];
    
        echo $opt.$chc;

        if($chc=="adduser"){
            header('location:adduser.php');
        }
        else if($chc=="edituser"){
            header('location:edituser.php');
        }
        else if($chc=="deleteuser"){
            header('location:deleteuser.php');
        }
        else if($chc=="searchuser"){
            header('location:searchuser.php');
        }

    }
?>