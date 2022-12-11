<?php 


    require_once('DB.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into user values('', '{$user['username']}', '{$user['password']}', '{$user['fathername']}', '{$user['mothername']}', '{$user['occupation']}', '{$user['DOB']}', '{$user['parmanentaddress']}', {$user['branch']}, {$user['room']}, {$user['furniture']})";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function insertRoom($user){
        $con = getConnection();
        $sql = "insert into room values('{$user['roomno']}', '{$user['roomtype']}', '{$user['branchname']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function insertFacility($user){
        $con = getConnection();
        $sql = "insert into facility values('', '{$user['name']}', '{$user['price']}', '{$user['receive']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function deleteUser($user){
        $con = getConnection();
        $RID = $_SESSION['RID'];
        $sql ="delete from user where username='$RID'";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }

    function editUser($id){
        $con = getConnection();
        
    }
//SEARCH
    function searchUser($user){
        $con = getConnection();
        $sql = "select * from user where username='{$user['searchbyusername']}'";
        echo $sql. "<br>";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }
    function allUsers(){
        $con = getConnection();
        $sql = "select * from user";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }

    function allUser($id){
        $con = getConnection();
        
    }

    function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
?>