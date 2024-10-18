<?php
    session_start();
    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username=="admin" AND $password=="admin"){
        #code
        $_SESSION["username"]=$username;
        header("location:dashboard.html");
    }else{
        header("location:login.html?login_error");
    }
?>

