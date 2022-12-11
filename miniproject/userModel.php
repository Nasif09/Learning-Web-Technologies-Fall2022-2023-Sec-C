<?php
    require_once 'db.php';

function adduser($user){
    $con = getconnection();
    $sql = "INSERT INTO `login` (`id`, `name`, `password`,`email`,`type`) VALUES ('{$user['id']}','{$user['name']}','{$user['password']}','{$user['email']}''{$user['type']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function login($user){
    $con = getconnection();
    $sql = "select * from login where name='{$name}' and password='{$password}'";
    $status = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($status);
    return $user;
}

?>