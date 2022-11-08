<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['newpass'];
    $retypenewpassword = $_POST['retypenewPass'];
    
    
        echo $_POST['email'];
        echo $_POST['pass'];
        echo $_POST['retypenewPass'];
    

    if($email == "" || $pass == "" || $retypenewPass == ""){
        header('location: forgottenPass.php?err=null');
    }
    else if($_SESSION['user']['email']== $email)
    {
        if($pass==$retypenewPass)
        {
            $_SESSION['user']['pass'] = $pass;
            header('location: login.php');
        }
        else
        {
            header('location: forgottenPass.php?err=notmatch');
        }
    }
    else{
        header('location: forgottenPass.php?err=invalid');
    }

?>