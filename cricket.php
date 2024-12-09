<?php
// Define an array to store the names of Indian cricket players
$players = [
    "Virat Kohli",
    "Rohit Sharma",
    "Shubman Gill",
    "KL Rahul",
    "Hardik Pandya",
    "Ravindra Jadeja",
    "Jasprit Bumrah",
    "Rishabh Pant",
    "Mohammad Shami",
    "Bhuvneshwar Kumar"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">List of Indian Cricket Players</h2>

    <table>
        <tr>
            <th>Player Name</th>
        </tr>
        <?php
        // Loop through the array and display each player's name in the table
        foreach ($players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
    </table>
</body>
</html>
