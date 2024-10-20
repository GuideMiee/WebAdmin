<?php 
    session_start();

    if (isset($_POST['login'])) {
        include('config.php');

        $firstname = $_POST['firstname'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE firstname = '$firstname' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);

            $_SESSION['id'] = $row['id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'Admin') {
                header('location: indexAdmin.php');
            }
            if ($_SESSION['userlevel'] == 'Member') {
                header('location: index.php');
            }

        } else {
            $_SESSION['error'] = "Invalid credentials";
            header('location: login.php');
        }
    } else {
        $_SESSION['error'] = "Invalid credentials";
        header('location: login.php');
    }

?>


