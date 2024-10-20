<?php
require('dbconnect.php');
$sql = "SELECT * FROM users where userlevel = 'm'";
$result = mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);
$order = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees info</title>
</head>
<body>
        <div class="container">
            <table class = "table table-striped table-hover">
                <h1 class ="text-center">Show infomation Employees</h1><br>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
                <thead>
                    <tr>
                    <th>Order</th>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Gender</th>
                        <th>Skills</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $order++; ?></td>
                        <td><?php echo $row["firstname"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["userlevel"]; ?></td>
                        <td>
                            <!-- <button type="button" class = "btn btn-danger">Delete</button> -->
                            <a href="deleteQuery.php?idemp=<?php echo $row["empid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete user ')">Delete</a>
                        </td>
                        <td>
                            <!-- <button type="button" class="btn btn-warning">Edit</button> -->
                            <a href="editForm.php?idemp=<?php echo $row["empid"]; ?>" class="btn btn-warning" onclick="return confirm('Are you sure for edit user ?')">Edit</a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
            <a href="insertform.php" class="btn btn-primary">Insert Data</a>
            <a href="index.php" class="btn btn-info">Back to home</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
</body>
</html>