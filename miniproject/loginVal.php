<?php
    require_once 'usermodel.php';
    $name = $_POST['name'];
    $password = $_POST['pass'];

    if($name == "" || $password == ""){
        header('location: login.php?err=null');
    }else{ 
        $user=['name'=>$name,'password'=>$password];
        $status=login($user);
        if($status){
            if($status['type']=='user'){
                header('location: userdashboard.php');
            }else{
                
                header('location: admindashboard.php');
            }
        }
    }



    // if($name == "" || $password == ""){
    //     header('location: login.php?err=null');
    // }else { 
    //     $user=['name'=>$name,'password'=>$password];
    //     $status=login($user);
    //     if($status){
    //         header('location: userdashboard.php');
    //     }else{
    //         echo "Error";
    //     }
    // }
 

?>