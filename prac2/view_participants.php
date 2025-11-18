<!DOCTYPE html>
<html>
<head>
    <title>View Participants</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        .count {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Registered Participants</h2>

<?php
// Simulated participant data
$participants = [
    ["name" => "Ali Ahmad", "email" => "ali@gmail.com", "event" => "Tech Talk", "gender" => "Male"],
    ["name" => "Siti Nur", "email" => "siti@gmail.com", "event" => "Workshop UX", "gender" => "Female"],
    ["name" => "Carlos Tan", "email" => "carlos@gmail.com", "event" => "Hackathon", "gender" => "Male"]
];

// Display table
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Event</th><th>Gender</th></tr>";

foreach ($participants as $person) {
    echo "<tr>";
    echo "<td>" . $person['name'] . "</td>";
    echo "<td>" . $person['email'] . "</td>";
    echo "<td>" . $person['event'] . "</td>";
    echo "<td>" . $person['gender'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Display total count
echo "<div class='count'>Total Participants: " . count($participants) . "</div>";
?>

</body>
</html>
