<?php 

    session_start();
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <h2>Restaurant</h2>
    </a>


      <div class="col-md-3 text-end">
          <a href="login.php" class="btn btn-outline-dark me-2">Login</a>
          <a href="register.php" class="btn btn-dark">Sign-up</a>
      </div>
    </header>
</div>


    <main class="form-signin text-center">
        <form action="login_db.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger">
                    <?php 
                        echo $_SESSION['error']; 
                        unset($_SESSION['error']);
                    ?>
                </div>   
            <?php } ?>


            <div class="form-floating">
                <input type="firstname" class="form-control" name="firstname" placeholder="Username" >
                <label for="floatingInput">Username</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <p>Don't have account <a href="register.php" style=" text-decoration: none;">Register Here</a> !</p>

            <button class="w-100 btn btn-lg btn-dark" name="login" type="submit">Sign in</button>

        </form>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>