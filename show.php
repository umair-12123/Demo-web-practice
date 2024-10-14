<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show </title>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .operation-icons {
            text-align: center;
        }
        .operation-icons a {
            margin: 0 5px;
            color: #333;
            text-decoration: none;
        }
        .operation-icons a:hover {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h2 style="text-align: center;">User Information</h2>
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";  
                $selectdata = "SELECT * FROM adddata";  
                $quy = mysqli_query($conn, $selectdata);

                if (!$quy) {
                    die("Query failed: " . mysqli_error($conn));  
                }

                $nums = mysqli_num_rows($quy);

                while ($reslt = mysqli_fetch_array($quy)) {                 
                ?>
            <tr>
                <td><?php echo $reslt['id']; ?></td>
                <td><?php echo $reslt['fname']; ?></td>
                <td><?php echo $reslt['lname']; ?></td>
                <td><?php echo $reslt['phone']; ?></td>
                <td class="operation-icons">
                    <a href="http://localhost/check/update.php?id=<?php echo $reslt['id']; ?>" title="Update"><i class="fas fa-edit"></i></a>
                    <a href="http://localhost/check/delete.php?id=<?php echo $reslt['id']; ?>" title="Delete"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
