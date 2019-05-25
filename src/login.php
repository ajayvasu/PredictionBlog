<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
 <html lang="en">
 <head>
   <title>Future Blog</title>
   <meta charset="utf-8">
   <link href="style/loginStyle.css" rel="stylesheet" type="text/css">
 </head>

 <body>
   <form action="index.php" method="post"><br>
     <input type="text" placeholder="username"><br>
     <input type="password" placeholder="password"><br>
     <input type="submit">
   </form>


 </body>

 </html>
