<?php 


    require_once('DB.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into user values('', '{$user['username']}', '{$user['password']}', '{$user['occupation']}', '{$user['branch']}', '{$user['room']}', '{$user['furniture']}')";
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

    function searchUserByUsername($username){
        $con = getConnection();
        
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