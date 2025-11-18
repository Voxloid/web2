<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyEvent Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navigation Bar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Banner */
        .banner {
            background-color: #f4f4f4;
            padding: 60px;
            text-align: center;
            font-size: 24px;
            color: #333;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 12px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="register.php">Registration Form</a>
        <a href="view_participants.php">View Participants</a>
        <a href="login.php">Login/Logout</a>
    </div>

    <!-- Banner Section -->
    <div class="banner">
        <?php
        echo "Welcome to MyEvent – Your Event Starts Here!";
        ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; <?php echo date("Y"); ?> MyEvent. All rights reserved.
    </div>

</body>
</html>
