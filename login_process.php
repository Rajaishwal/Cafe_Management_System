<?php
session_start();
include('dbconnect.php');

function checkUser() {
    global $conn;

    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query to check if user exists
        $query = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // User found, start session
                $_SESSION['username'] = $username;
                header('Location: index.php'); // Redirect to index page after successful login
                exit();
            } else {
                // User not found
                $_SESSION['error_message'] = "Invalid username or password";
                header('Location: login.php');
                exit();
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

checkUser();
?>
