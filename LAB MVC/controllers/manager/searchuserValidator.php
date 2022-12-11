<?php

    session_start();
    require_once('../../models/userModel.php');

    if(isset($_POST['searchbyusername']))
    {
        $searchbyusername = $_POST['searchbyusername'];
    }
    // $password = $_POST['password'];
    // $occupation= $_POST['occupation'];
    // $fathername = $_POST['fathername'];
    // $mothername = $_POST['mothername']; 
    // $parmanentaddress = $_POST['parmanentaddress'];
    // $DOB = $_POST['DOB'];
    // $room = $_POST['room'];
    // $furniture = $_POST['furniture'];
    // $branch = $_POST['branch'];

    // if($username == "" || $password == "" || $occupation == ""  || $room == ""  || $furniture == "" ){
    //     header('location: ../view/adduser.php?err=null');
    // }else { 
        $user = ['searchbyusername'=>$searchbyusername];
        $result = searchUser($user);
        $status=['nothing'=>'nothing'];
        while($row = mysqli_fetch_assoc($result))
        {
            $status=['id'=>$row['id'], 'username'=>$row['username'], 'password'=>$row['password'], 'occupation'=>$row['occupation'], 'fathername'=>$row['fathername'], 'mothername'=>$row['mothername'], 'parmanentaddress'=>$row['parmanentaddress'], 'dob'=>$row['dob'], 'room'=>$row['room'], 'furniture'=>$row['furniture'], 'branch'=>$row['branch']];
        }
        
        
        if($status)
        {
            $_SESSION['status'] = $status;
            header('location: ../../views/manager/founduser.php');
        }else{
            echo "Error";
        }
    // }

?>