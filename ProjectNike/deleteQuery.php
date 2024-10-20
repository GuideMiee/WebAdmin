<?php
    require("dbconnect.php");
    $id = $_GET["idemp"];
    $sql = "DELETE FROM employees WHERE empid =  $id";
    $result = mysqli_query($connect,$sql);
    if ($result) {
        header("location:showdata.php");
    }
    ?>