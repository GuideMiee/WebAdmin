<?php
require('dbconnect.php');

$fname= $_POST["fname"]; 
$lname= $_POST["lname"]; 
$gender= $_POST["gender"]; 
$emskills=implode(",",$_POST['skills']);
$sql = "INSERT INTO employees(fname,lname,gender,skills) VALUES ('$fname','$lname','$gender','$emskills')";
$result = mysqli_query($connect, $sql);
if ($result) {
    header('location:showdata.php');
    exit(0);
    }
    else {
    echo mysqli_error($connect);
    } 
?>