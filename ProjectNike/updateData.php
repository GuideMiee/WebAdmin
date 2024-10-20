<?php
require('dbconnect.php');
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$emskills = implode(',', $_POST['skills']);
$sql = "UPDATE employees SET fname = '$fname', lname = '$lname' , gender = '$gender' , skills = '$emskills' WHERE empid = $id ";
$result = mysqli_query($connect, $sql);
if ($result) {
    header("location: showdata.php");
}
?>