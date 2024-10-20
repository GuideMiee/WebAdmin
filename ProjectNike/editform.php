<?php
require("dbconnect.php");
$id = $_GET["idemp"];
$sql = "SELECT * FROM employees WHERE empid =  $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$skill_arr = array("JAVA", "PHP", "Python", "HTML");
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
        <h2 class="text-center">Form edit data employees</h2>
        <form action="updateData.php" method="POST">
            <input type="hidden" value="<?php echo $row['empid']; ?>" name="id">
            <div class="form-group">
                <label for="Fistname"></label>
                <input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="Lastname"></label>
                <input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="gender">Gender</label>
                <?php
                if ($row['gender'] == 'male') {
                    echo "<input type='radio' name='gender' value'male' checked> Male ";
                    echo "<input type='radio' name='gender' value'Female' > Female ";
                    echo "<input type='radio' name='gender' value'Outher' > Other ";
                } else if ($row["gender"] == 'female') {
                    echo "<input type='radio' name='gender' value'male' > Male ";
                    echo "<input type='radio' name='gender' value'Female' checked > Female ";
                    echo "<input type='radio' name='gender' value'Outher' > Other ";
                } else {
                    echo "<input type='radio' name='gender' value'male' > Male ";
                    echo "<input type='radio' name='gender' value'Female'  > Female ";
                    echo "<input type='radio' name='gender' value'Outher' checked> Other ";
                }
                ?>
            </div>
            <div class="form-group">
                <label for="">Skills</label>
                <?php
                    $skill = explode(",", $row["skills"]);
                    foreach ($skill_arr as $value) {
                        if(in_array($value, $skill_arr)) {
                            echo"<input type= 'checkbox' name='skills[]' value=' $value ' checked> $value ";
                        }else{
                            echo "<input type= 'checkbox' name='skills[]' value=' $value ' > $value ";
                        }
                    }
                ?>
            </div>
            <input type="submit" class="btn btn-success" value="Update Data">
            <input type="reset" class="btn btn-warning" value="Reset Data">
            <a href="index.html" class="btn btn-info">Back to menu</a>
        </form>

    </div>
</body>

</html>