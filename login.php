<?php
// Start session for login process [cite: 35]
session_start();

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Simple simulation: Check if credentials match a hardcoded value
    if ($username === 'admin' && $password === '123') {
        
        // TASK 4 - part 1: Set a session variable [cite: 35]
        $_SESSION["user"] = $username;

        // TASK 4 - part 3: Use cookies to store the user's name for 3 minutes [cite: 41]
        $cookie_name = 'last_user';
        $cookie_value = $username;
        $expiry_time = time() + (3 * 60); // 3 minutes [cite: 41]
        setcookie($cookie_name, $cookie_value, $expiry_time, "/"); 

        // TASK 4 - part 1: Redirect to welcome.php if logged in [cite: 36]
        header("Location: welcome.php");
        exit;
    } else {
        $error = '<p style="color: red;">Invalid username or password.</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyEvent - Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php echo $error; ?>

    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
