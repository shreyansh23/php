<?php
$servername = "192.168.121.187";
$username = "first_year";
$password = "first_year";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo $_SERVER['SERVER_NAME'];
?> 
