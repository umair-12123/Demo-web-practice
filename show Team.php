<?php
include("connection.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Function to update the order of selected players
if (isset($_POST['assign_order'])) {
    if (!empty($_POST['players'])) {
        $selected_players = $_POST['players'];
        shuffle($selected_players); // Randomize the order of players

        // Update the database with the assigned order
        foreach ($selected_players as $index => $player_id) {
            $order_number = $index + 1; // Assign unique order starting from 1
            $update_order_query = "UPDATE dailymatch SET player_order = $order_number WHERE id = $player_id";
            $result = mysqli_query($conn, $update_order_query);

            if (!$result) {
                echo '<script>alert("Failed to update order: ' . mysqli_error($conn) . '");</script>';
            }
        }
        
      //  echo '<script>alert("Order assigned successfully!");</script>';
        echo '<script>window.location.href=window.location.href;</script>'; // Reload page to refresh the order
    } else {
        echo '<script>alert("Please select at least one player.");</script>';
    }
}

// Function to reset the order of all players
if (isset($_POST['reset_order'])) {
    $reset_query = "UPDATE dailymatch SET player_order = 0";
    $result = mysqli_query($conn, $reset_query);

    if ($result) {
      //  echo '<script>alert("All orders reset to 0 successfully!");</script>';
        echo '<script>window.location.href=window.location.href;</script>'; // Reload page to reflect reset order
    } else {
        echo '<script>alert("Failed to reset orders: ' . mysqli_error($conn) . '");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Team</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .table-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .submit-btn, .reset-btn, .select-all-btn {
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover, .reset-btn:hover, .select-all-btn:hover {
            background-color: #45a049;
        }
        .faltu {
            background-color: inherit;
            display: flex;
            justify-content: space-between;
        }
    </style>
    <script>
        function selectAllPlayers() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = true);
        }
    </script>
</head>
<body>
    <div class="table-container">
        <h2 style="text-align: center;">Cricket Team</h2>
        <form method="POST" action="">
            <table>
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Players Name</th>
                        <th>Order</th> <!-- Added column to display assigned order -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch players and sort by player_order ascending
                    $selectdata = "SELECT * FROM dailymatch ORDER BY player_order ASC, id ASC";
                    $quy = mysqli_query($conn, $selectdata);
                    if (!$quy) {
                        die("Query failed: " . mysqli_error($conn));  
                    }

                    while ($reslt = mysqli_fetch_array($quy)) {                 
                    ?>
                    <tr>
                        <td><input type="checkbox" name="players[]" value="<?php echo $reslt['id']; ?>"></td>
                        <td><?php echo $reslt['names']; ?></td>
                        <td><?php echo $reslt['player_order']; ?></td> <!-- Displaying assigned order -->
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
            <div class="faltu">
                <button type="button" class="select-all-btn" onclick="selectAllPlayers()">Select All</button>
                <button type="submit" name="assign_order" class="submit-btn">Assign Order</button>
                <button type="submit" name="reset_order" class="reset-btn">Reset Order</button>
            </div>
        </form>
    </div>
</body>
</html>
