<?php
session_start();
include_once 'config.php';
$id = $_GET["id"]; // Make sure 'id' parameter is properly passed in the URL
$sql = "SELECT * FROM users WHERE id = $id  ";
$result = mysqli_query($conn, $sql); // Change '$connect' to '$conn'
$row = mysqli_fetch_assoc($result);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
        <br>
        <h2 class="text-center">Form edit data member</h2>
        <form action="updateData.php" method="POST">
            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
            <div class="form-group">
                <br>
                <label for="Username" class="fw-bold">Username</label>
                <input type="text" name="firstname" class="form-control mt-2" value="<?php echo $row['firstname']; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="Password" class="fw-bold">Password</label>
                <input type="text" name="password" class="form-control mt-2" value="<?php echo $row['password']; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="userlevel" class="fw-bold mb-2">UserLevel</label><br>
                <input type="radio" name="userlevel"  value="Member" <?php echo ($row['userlevel'] == 'Member') ? 'checked' : ''; ?>> Member
                <input class = "ms-2" type="radio" name="userlevel" value="Admin" <?php echo ($row['userlevel'] == 'Admin') ? 'checked' : ''; ?>> Admin
            </div>


        <br>
            <input type="submit" class="btn btn-success" value="Update Data">
            <input type="reset" class="btn btn-warning" value="Reset Data">
            <a href="indexAdmin.php" class="btn btn-info">Back to menu</a>
        </form>

    </div>
</body>

</html>