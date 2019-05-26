<!DOCTYPE html>
<?php

if($_POST["username"] == "apple" && $_POST["password"] == "123"){
  $servername = "localhost";
  $username = "root";
  $password = "1234567890";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
}else{
  header('Location: http://127.0.0.1:8081/src/login.php');
}

?>

 <html lang="en">
 <head>
   <title>Future Blog</title>
   <meta charset="utf-8">
   <link href="style/indexStyle.css" rel="stylesheet" type="text/css">
 </head>

 <body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Predictions</a></li>
        <li><a href="#">Opinions</a></li>
        <li><a href="#">Discussions</a></li>
        <li><a href="#">Journal</a></li>
        <li><a href="src/login.php">Login</a></li>
    </ul>
    <div id="contentBox">
       <p>Login to view stories</p>
    </div>

 </body>


 </html>
