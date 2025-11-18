<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $reminder = $_POST['reminder'];
    header("Location: cookie2.php?name=$name&reminder=$reminder");
    exit();
}
?>

<form method="post" action="cookie1.php">
    <table>
        <tr>
            <td>Nama:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Reminder:</td>
            <td><input type="text" name="reminder"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Send"></td>
        </tr>
    </table>
</form>
