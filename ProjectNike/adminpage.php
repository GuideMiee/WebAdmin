<?php
session_start();
error_reporting(E_NOTICE);
$username = $_POST['username'];
$password = $_POST['password'];
    if(($username != 'admin') || ($password != 'admin'))
    {
        echo "<script>";
        echo "alert(\"username password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
    else{
        $_SESSION["ses_userid"] = session_id();
        $_SESSION["ses_username"] = $username;
        header('location:adminindex.php');
    }
?>