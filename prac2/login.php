<?php
session_start();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Simulate login (you can add real validation here)
    if (!empty($username) && !empty($password)) {
        $_SESSION["user"] = $username;

        // Set cookie for 3 minutes
        setcookie("last_user", $username, time() + 180);

        header("Location: welcome.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="password"] {
            width: 300px; padding: 8px; border: 1px solid #ccc;
        }
        .submit-btn { padding: 10px 20px; background-color: #28a745; color: white; border: none; }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Login" class="submit-btn">
    </form>
</body>
</html>
