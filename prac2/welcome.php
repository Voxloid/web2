<?php
session_start();

// If not logged in, redirect to login
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

$username = $_SESSION["user"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .welcome { font-size: 20px; margin-bottom: 20px; }
        .logout-btn {
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="welcome">
        Welcome, Admin <?php echo htmlspecialchars($username); ?>!
    </div>

    <?php
    if (isset($_COOKIE["last_user"])) {
        echo "<p>Welcome back, " . htmlspecialchars($_COOKIE["last_user"]) . "! You last logged in recently.</p>";
    }
    ?>

    <a href="welcome.php?logout=true" class="logout-btn">Logout</a>
</body>
</html>
