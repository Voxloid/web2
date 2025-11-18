<!DOCTYPE html>
<html>
<head>
    <title>Musical Valley</title>
</head>
<body>

<h2>Musical Valley</h2>
<p>Greatest Sound Of All!!<br>Please Confirm The Details!</p>

<form method="post" action="question6.php">
    Name:
    <input type="text" name="name" required 
        oninvalid="this.setCustomValidity('Please Insert Your Name')" 
        oninput="this.setCustomValidity('')">
    <br><br>

    Phone No:
    <input type="text" name="phone" required 
        oninvalid="this.setCustomValidity('Please Insert Your Phone No')" 
        oninput="this.setCustomValidity('')">
    <br><br>

Options:
<input type="radio" name="option" value="Self-Delivery" required
    oninvalid="this.setCustomValidity('Please Choose Any Options')"
    oninput="this.setCustomValidity('')"> Self-Delivery

<input type="radio" name="option" value="Pickup"> Pickup
<br><br>


    <input type="submit" value="Purchase">
</form>

</body>
</html>
