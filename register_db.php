<?php
session_start();
// Include the database connection code
require 'config.php';

// Retrieve and validate user input
if (isset($_POST['register'])) {
  $firstname = $_POST['firstname'];
  $password = $_POST['password'];

  // Perform validation checks on user input (username length, etc.)
  // ...

  if (empty($firstname)) {
    $_SESSION['error'] = "Please enter your Username";
    header('location: register.php');
  } else if (empty($password)) {
    $_SESSION['error'] = "Please enter your password";
    header('location: register.php');
  } else {

    // Check username existence (uncomment and adjust)
    $check_query = "SELECT * FROM users WHERE firstname='$firstname'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['error'] = 'Username already exists.';
        header('Location: register.php');
    } else {
        // Insert new user into the database
        $insert_query = "INSERT INTO users (firstname, password ,userlevel) VALUES ('$firstname', '$password' , 'Member')";
        if (mysqli_query($conn, $insert_query)) {
            // Redirect to the login page
            header("Location: login.php");
            exit;
        } else {
            $_SESSION['error'] = "Something went wrong, please try again!";
            echo "Registration failed: " . $e->getMessage();
            header('location: register.php');
        }
    }
}
}
?>
