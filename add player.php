<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: auto;
            padding: 20px;
            margin-top: 100px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="tel"] {
            width: 93%;            
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"], a.button {
            display: block;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        input[type="submit"]:hover, a.button:hover {
           
            background-color: #45a049;
        }
        .faltu{
            background-color: inherit;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add Players Name</h2>
    <form action="" method="POST">
        <input type="text" name="names" placeholder="Enter Name" required >
        <div class="faltu">     
        <input type="submit" value="Add New Player" name="submit">
    </form>
    <a href="http://localhost/check/show Team.php" class="button">Show Existing Players</a>
    </div> 
</div>

</body>
</html>

<?php 
include "connection.php";

if (isset($_POST["submit"])) {
    $firstname = $_POST["names"];
    $data = "INSERT INTO dailymatch(names) VALUES ('$firstname')";
    
    $result = mysqli_query($conn, $data);
    
    if ($result) {
        echo '<script>alert("Data inserted successfully");</script>';
    } else {
        echo '<script>alert("Data not inserted: ' . mysqli_error($conn) . '");</script>';
    }
}
?>
