<?php
session_start();
    if(!isset($_POST['mngopt'])){
        $_SESSION['mngopterr'] = "Select radio options properly";
        header('location: ../../mangerdashboard.php');

        $opt=$_POST['mngOpt'];
        $chc=$_POST[$opt];
    
        echo $opt.$chc;
//user
        if($chc=="adduser"){
            header('location:../../views/manager/adduser.php');
        }
        else if($chc=="searchuser"){
            header('location:../../views/manager/searchuser.php');
        }
        else if($chc=="users"){
            header('location:../../views/manager/allusers.php');
        }

//employee
        else if($chc=="addemployee"){
            header('location:../../views/manager/addemployee.php');
        }
        else if($chc=="searchemployee"){
            header('location:../../views/manager/searchemployee.php');
        }
        else if($chc=="employees"){
            header('location:../../views/manager/employees.php');
        }

//room
        else if($chc=="addroom"){
            header('location:../../views/manager/addroom.php');
        }
        else if($chc=="roomdetails"){
            header('location:../../views/manager/roomdetails.php');
        }

//facility   
        else if($chc=="addfacility"){
            header('location:../../views/manager/addfacility.php');
        } 
        else if($chc=="facilities"){
            header('location:../../views/manager/facilities.php');
        }
        else if($chc=="updatefacility"){
            header('location:../../views/manager/updatefacility.php');
        }

 //facility   
        else if($chc=="addfacility"){
            header('location:../../views/manager/addfacility.php');
        } 
        else if($chc=="facilities"){
            header('location:../../views/manager/facilities.php');
        }
        else if($chc=="updatefacility"){
            header('location:../../views/manager/updatefacility.php');
        }

   //others     
        else if($chc=="contactbox"){
            header('location: ../../views/manager/contactbox.php');
        } 
        else if($chc=="complainbox"){
            header('location: ../../views/manager/complainbox.php');
        } 
        else if($chc=="leaveapplication"){
            header('location: ../../views/manager/leaveapplication.php');
        } 

  //accounts
  
        else if($chc=="payslip"){
            header('location: ../../views/manager/payslip.php');
        } 
    }
?>