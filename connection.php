<?php
// db.php
$host = 'localhost'; // Database server
$user = 'root'; // Database username
$pass = 'Umair@123'; // Database password
$dbname = 'thapa'; // Database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
// if ($conn) {
//     ?>
//     <script>
//         alert("connection successfully");
//     </script>
//     <?php 
// } else {
//     die("Connection failed: " . mysqli_connect_error());
// }
?>
