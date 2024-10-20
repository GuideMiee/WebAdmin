<?php
        include_once 'config.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        session_start();
        if (!isset($_SESSION['id'])) {
            header('Location: login.php');
            exit(); // ออกจากสคริปต์เพื่อป้องกันการทำงานต่อ
        }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ShopUs</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5 fs-5">
                <a class="navbar-brand fs-1" href="index.php"><h2>Restaurant</h2></a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active " aria-current="page" href="indexAdmin.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin.php">Edit</a></li>
                    </ul>
                    <form class="d-flex ">
                    <a class="btn btn-outline-dark align-content-center ms-4" >
                    <i class="bi-cart-fill me-1 "></i>
                        Cart
                     <span id="cart-count"  class="badge bg-dark text-white ms-auto align-middle rounded-pill">0</span>
                    </a>
                        </button>
                        <div class="collapse btn btn-outline-dark navbar-collapse ms-2" id="navbarSupportedContent">
                    <ul class=" d-flex ms-auto mb-2 mb-lg-0 list-unstyled"  >
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle secend-text fw-bold " id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-person-circle me-1"></i>
                               <?php echo  $_SESSION['firstname']; ?>
                            </a>
                            <ul class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown">
                                        <a href='logout.php' class="dropdown-item">Logout</a>
                            </ul>
                        </li>
                    </ul>


                </div>
                
                    </form>
                    
                </div>
            </div>
            
        </nav>
        <!-- Header-->
        
        <?php
// Include the configuration file
require('config.php');

// Establish a database connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Now, you can proceed with your query
$sql = "SELECT * FROM users ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
?>



        <div class="container">
            <table class = "table table-striped table-hover">
                <br>
                <h1 class ="text-center">Show User</h1><br>
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>UserLevel</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["firstname"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["userlevel"]; ?></td>
                        <td>
                            <!-- <button type="button" class = "btn btn-danger">Delete</button> -->
                            <a href="deleteQuery.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete user ')">Delete</a>
                        </td>
                        <td>
                            <!-- <button type="button" class="btn btn-warning">Edit</button> -->
                            <a href="editForm.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning" onclick="return confirm('Are you sure for edit user ?')">Edit</a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
            <a href="indexAdmin.php" class="btn btn-info">Back to home</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>



        <!-- Footer-->
        <footer class="py-5 bg-dark"style="position: fixed; bottom: 0; width:100%;">
  <div class="container"> <p class="m-0 text-center text-white ">Copyright &copy; My Website 2024</p></div>
</footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->


        <script src="js/scripts.js"></script>
        
    </body>

</html>
