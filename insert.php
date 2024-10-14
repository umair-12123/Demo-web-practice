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
            margin: 0;
            padding: 20px;
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
            width: 100%;
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
    </style>
</head>
<body>

<div class="container">
    <h2>Fill Your Information</h2>
    <form action="" method="POST">
        <input type="text" name="fname" placeholder="First Name" required >
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <input type="submit" value="Submit" name="submit">
    </form>
    <!-- Add the "Check Data" button -->
    <a href="http://localhost/check/show.php" class="button">Check Data</a>
</div>

</body>
</html>

<?php 
include "connection.php";

if (isset($_POST["submit"])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $tel = $_POST["phone"];

    // Use the correct variable name
    $data = "INSERT INTO adddata(fname, lname, phone) VALUES ('$firstname', '$lastname', '$tel')";
    
    $result = mysqli_query($conn, $data);
    
    if ($result) {
        echo '<script>alert("Data inserted successfully");</script>';
    } else {
        echo '<script>alert("Data not inserted: ' . mysqli_error($conn) . '");</script>';
    }
}
?>
