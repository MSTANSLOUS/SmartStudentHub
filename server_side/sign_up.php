<?php
session_start(); // Start the session
global $conn;
include "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["user_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insert the data into the database
    $sql = "INSERT INTO students (user, email, pass) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        // After successful sign-up, set the session variable for user_name
        $_SESSION['user_name'] = $name;
        // Redirect with a success message in the URL query string
        header("Location: ../https/dash_board.php");
        exit;
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "❌ Invalid access.";
}

