<?php
require('config.php');

// รับค่าที่ส่งมาจากแบบฟอร์ม
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$password = $_POST['password'];
$userlevel = $_POST['userlevel'];

// อัปเดตข้อมูลในฐานข้อมูล
$sql = "UPDATE users SET firstname = '$firstname', password = '$password', userlevel = '$userlevel' WHERE id = $id";
$result = mysqli_query($conn, $sql);

// ตรวจสอบผลลัพธ์
if ($result) {
  header("location: admin.php");
} else {
  echo "Error: " . mysqli_error($conn);
}
?>
