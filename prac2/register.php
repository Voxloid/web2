<?php
// Initialize variables
$name = $email = $event = $gender = $remarks = "";
$nameErr = $emailErr = $eventErr = $genderErr = $remarksErr = "";
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $event = $_POST['event'];
    $gender = $_POST['gender'] ?? '';
    $remarks = trim($_POST['remarks']);

    // Validation
    if (empty($name)) $nameErr = "* Full Name is required";
    if (empty($email)) $emailErr = "* Email is required";
    if (empty($event)) $eventErr = "* Event selection is required";
    if (empty($gender)) $genderErr = "* Gender is required";
    if (empty($remarks)) $remarksErr = "* Remarks are required";

    // If all fields are filled
    if (empty($nameErr) && empty($emailErr) && empty($eventErr) && empty($genderErr) && empty($remarksErr)) {
        $submitted = true;
        $formattedName = ucwords(strtolower($name)); // Capitalize each word
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .error { color: red; font-size: 14px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], textarea, select {
            width: 300px; padding: 8px; border: 1px solid #ccc;
        }
        .radio-group { margin-bottom: 10px; }
        .submit-btn { padding: 10px 20px; background-color: #007BFF; color: white; border: none; }
        .result { margin-top: 30px; padding: 20px; background-color: #f4f4f4; border: 1px solid #ccc; }
    </style>
</head>
<body>

<h2>Event Registration Form</h2>

<form method="post" action="register.php">
    <div class="form-group">
        <label>Full Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <div class="error"><?php echo $nameErr; ?></div>
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <div class="error"><?php echo $emailErr; ?></div>
    </div>

    <div class="form-group">
        <label>Event Name:</label>
        <select name="event">
            <option value="">-- Select Event --</option>
            <option value="Tech Talk" <?php if($event=="Tech Talk") echo "selected"; ?>>Tech Talk</option>
            <option value="Workshop" <?php if($event=="Workshop") echo "selected"; ?>>Workshop</option>
            <option value="Hackathon" <?php if($event=="Hackathon") echo "selected"; ?>>Hackathon</option>
        </select>
        <div class="error"><?php echo $eventErr; ?></div>
    </div>

    <div class="form-group">
        <label>Gender:</label>
        <div class="radio-group">
            <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
        </div>
        <div class="error"><?php echo $genderErr; ?></div>
    </div>

    <div class="form-group">
        <label>Remarks:</label>
        <textarea name="remarks"><?php echo $remarks; ?></textarea>
        <div class="error"><?php echo $remarksErr; ?></div>
    </div>

    <input type="submit" value="Register" class="submit-btn">
</form>

<?php if ($submitted): ?>
    <div class="result">
        <h3>Registration Details</h3>
        <p><strong>Name:</strong> <?php echo $formattedName; ?></p>
        <p><strong>Email:</strong> <?php echo strtolower($email); ?></p>
        <p><strong>Event:</strong> <?php echo $event; ?></p>
        <p><strong>Gender:</strong> <?php echo $gender; ?></p>
        <p><strong>Remarks:</strong> <?php echo ucfirst($remarks); ?></p>
    </div>
<?php endif; ?>

</body>
</html>
