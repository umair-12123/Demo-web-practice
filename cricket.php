<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Team</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 50%;
            background-color: #f0f0f0;
            padding: 20px;
            margin: 50px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .formstyle {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .formstyle label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .formstyle input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }
        .formstyle input[type="checkbox"] {
            margin-right: 10px;
        }
        .formstyle .checkbox-group {
            display: flex;
            align-items: center;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .buttons button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .buttons button:hover {
            background-color: #218838;
        }
        .buttons .show-button {
            background-color: #007bff;
        }
        .buttons .show-button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Players</h1>
        <form action="" class="formstyle">
            <div>
                <label for="playerName">Player Name:</label>
                <input type="text" name="playerName" id="playerName" placeholder="Enter player name">
            </div>
            <div class="checkbox-group">
                <input type="checkbox" name="isSelected" id="isSelected">
                <label for="isSelected">Select this player</label>
            </div>
            <div class="buttons">
                <button type="submit">Add Player</button>
                <button type="button" class="show-button">Show Team</button>
            </div>
        </form>
    </div>
</body>
</html>
