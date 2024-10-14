<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }
        input[type="number"],
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            padding: 12px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        ol {
            padding-left: 20px;
            margin-top: 20px;
        }
        ol li {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Enter Player Names</h2>
    <form method="POST">
        <label for="playerCount">Number of Players:</label>
        <input type="number" id="playerCount" name="playerCount" min="1" max="20" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['players'])) {
        $playerCount = intval($_POST['playerCount']);
        echo '<form method="POST">';
        echo '<input type="hidden" name="playerCount" value="'.$playerCount.'">';
        for ($i = 1; $i <= $playerCount; $i++) {
            echo '<label for="player' . $i . '">Player ' . $i . ' Name:</label>';
            echo '<input type="text" id="player' . $i . '" name="players[]' . '" required>';
        }
        echo '<button type="submit">Select Player Order</button>';
        echo '</form>';
    }

    if (isset($_POST['players'])) {
        $players = $_POST['players'];
        shuffle($players); 
        echo "<h3>Player Order:</h3>";
        echo "<ol>";
        foreach ($players as $player) {
            echo "<li>" . htmlspecialchars($player) . "</li>";
        }
        echo "</ol>";
    }
    ?>
</div>

</body>
</html>
