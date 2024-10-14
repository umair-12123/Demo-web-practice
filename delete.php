<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Information</title>
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
    <h2>Delete Information</h2>
    <form action="" method="POST"> -->
        <?php 
        include "connection.php";
        $ids = $_GET["id"];
        $query = "SELECT * FROM adddata WHERE id={$ids}";
        $result = mysqli_query($conn, $query);
        $addata = mysqli_fetch_array($result);

        // if (isset($_POST["submit"])) {
            // $firstname = $_POST["fname"];
            // $lastname = $_POST["lname"];
            // $tel = $_POST["phone"];
            $deleteQuery = "DELETE FROM adddata WHERE id={$ids}";
            //$updateQuery = "UPDATE adddata SET fname='$firstname', lname='$lastname', phone='$tel' WHERE id={$ids}";
            $updateResult = mysqli_query($conn, $deleteQuery);

            if ($updateResult) {
                echo '<script>alert("Data deleted successfully"); window.location.href="show.php";</script>';
            } else {
                echo '<script>alert("Data not deleted: ' . mysqli_error($conn) . '");</script>';
            }
        // }
        ?>
        <!-- <input type="text" name="fname" placeholder="First Name" value="<?php echo $addata['fname']; ?>" required>
        <input type="text" name="lname" placeholder="Last Name" value="<?php echo $addata['lname']; ?>" required>
        <input type="tel" name="phone" placeholder="Phone Number" value="<?php echo $addata['phone']; ?>" required>
        <input type="submit" value="Delete" name="submit">
    </form>
</div>

</body>
</html> -->
