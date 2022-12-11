<?php
session_start();
    if(!isset($_POST['mngopt'])){
        $_SESSION['mngopterr'] = "Select radio options properly";
        header('location: ../mangerdashboard.php');

        $opt=$_POST['mngOpt'];
        $chc=$_POST[$opt];
    
        echo $opt.$chc;

        if($chc=="adduser"){
            header('location:../views/adduser.php');
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

        else if($chc=="addroom"){
            header('location:../views/addroom.php');
        }
        
        else if($chc=="addfacility"){
            header('location:../views/addfacility.php');
        }

    }
?>