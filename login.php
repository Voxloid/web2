<?php
// Start the session to access session variables
session_start();

// Check if user is logged in, if not, redirect to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$username = htmlspecialchars($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyEvent - Welcome</title>
</head>
<body>
    <h1><?php echo "Welcome, Admin [" . $username . "]!"; ?></h1>
    <p>You have successfully logged into the system.</p>
    
    <form action="welcome.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    // TASK 4 - part 2: Destroy the session [cite: 40]
    session_destroy();
    
    // TASK 4 - part 2: Redirect to login page [cite: 40]
    header("Location: login.php");
    exit;
}
?>
