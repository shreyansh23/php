<?php
// define variables and set to empty values

$servername = "192.168.121.187";
$username = "first_year";
$psw = "first_year";
$dbname = "first_year_db";

// Create connection
$conn = new mysqli($servername, $username, $psw, $dbname);
// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username from sj_users where username ='$_POST["username"]'";
$sql2="SELECT password from sj_users where username='$_POST["username"]'  ";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE )
      echo "Welcome". $username;
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
