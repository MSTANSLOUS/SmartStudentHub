<?php
    session_start(); // Start the session

    // Check if the user is logged in by checking the session variable
    if (!isset($_SESSION['user_name'])) {
        // If the session doesn't exist, redirect to the login page
        header("Location: ../index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../css/dash_board.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<div class="dashboard">
    <header>
        <h1>Welcome,  <?php echo $_SESSION['user_name']; ?>!</h1>
        <a href="../index.php"><button class="logout-btn">Logout</button></a>
    </header>

    <div class="top-bar">
        <div class="search-bar">
            <input type="text" placeholder="Search courses, assignments...">
        </div>
        <div class="notifications" onclick="toggleNotifications()">
            <i class="fas fa-bell"></i>
            <span class="badge">3</span>
        </div>
    </div>

    <div class="cards">
        <div class="card">
            <h2>My Courses</h2>
            <p>View and manage enrolled courses.</p>
            <button>Open</button>
        </div>
        <div class="card">
            <h2>Grades</h2>
            <p>Check your performance and GPA.</p>
            <button>View</button>
        </div>
        <div class="card">
            <h2>Assignments</h2>
            <p>Track upcoming tasks and deadlines.</p>
            <button>Track</button>
        </div>
        <div class="card">
            <h2>Settings</h2>
            <p>Manage account and preferences.</p>
            <button>Update</button>
        </div>
    </div>

    <div class="calendar">
        <h3>Upcoming Deadlines</h3>
        <div class="cards">
            <div class="card">
                <h2>IPP</h2>
                <p>View and manage enrolled courses.</p>
                <button>Open</button>
            </div>
            <div class="card">
                <h2>INT</h2>
                <p>Check your performance and GPA.</p>
                <button>View</button>
            </div>
            <div class="card">
                <h2>INF</h2>
                <p>Track upcoming tasks and deadlines.</p>
                <button>Track</button>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleNotifications() {
        const box = document.getElementById("notificationBox");
        box.style.display = box.style.display === "block" ? "none" : "block";
    }

    // Optional: Close when clicking outside
    document.addEventListener("click", function (event) {
        const notif = document.querySelector(".notifications");
        const box = document.getElementById("notificationBox");
        if (!notif.contains(event.target)) {
            box.style.display = "none";
        }
    });
</script>

</body>
</html>
