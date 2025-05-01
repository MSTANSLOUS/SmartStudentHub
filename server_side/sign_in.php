<?php
include "db_connection.php";
global $conn;
session_start(); // Start the session
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    // Check if user exists in the database
    $sql = "SELECT * FROM students WHERE email = '$email' AND pass = '$pswd'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {
        // Fetch user details
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user']; // Save username in session
        header("Location: ../https/dash_board.php"); // Redirect to dashboard
        exit;
    } else {
        echo "❌ Invalid email or password.";
    }

    mysqli_close($conn);
} else {
    echo "❌ Invalid request.";
}
