<?php
if (isset($_GET['name']) && isset($_GET['reminder'])) {
    $name = $_GET['name'];
    $reminder = $_GET['reminder'];

    echo "Selamat Datang, $name<br>";
    echo "Peringatan anda: $reminder<br>";

    // Set cookies for 60 seconds
    setcookie("name", $name, time() + 60);
    setcookie("reminder", $reminder, time() + 60);
}
?>
