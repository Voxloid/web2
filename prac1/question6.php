<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $option = $_POST['option'];


    echo "Hi $name, your option is $option<br>";
    echo "Our team will give you a call at $phone";
} else {
    echo "No data received.";
}
?>
