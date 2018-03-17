<!DOCTYPE html>
<html>
<head>
	<title>Sign up Page</title>
</head>
<body>
 <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' onsubmit="return checkForm(this);">
 	<fieldset>
 		<legend>Sign up Page</legend>
<p>Name : <input type="text" name="name" placeholder="Enter your name"></p>
<p>Username : <input type="text" name="username" placeholder="Enter your username"</p>
<p>
 			Phone Number : 
 			<input type="text" name="number" placeholder="Enter your Phone number (+91.........)">
  		</p>
  		<p>
  			Age :
 			<input type="text" name="age" placeholder="Enter your Age">
  		</p>
  		<p> 
  			Gender :
  			<input type="radio" name="gender" value="male" checked> Male
  			<input type="radio" name="gender" value="female"> Female

  		</p>
  		<p>
  			Email :
 			<input type="text" name="email" placeholder="Enter your Email Id">
  		</p>
 		<p>
 			Password :
 			<input type="password" name="password1" placeholder="Enter your Password">
 		</p>
 		<p>
 			Confirm Password :
 			<input type="password" name="password2" placeholder="Enter your Password again">
 		</p>



 		<input type="submit" value="Submit">
 	</fieldset>
 </form>
 <script src="js/checkForm.js"></script>
</body>
</html>
<?php
// define variables and set to empty values
$name = $username= $number= $age=$gender=$email=$password="";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
        $username = test_input($_POST["username"]);
          $number = test_input($_POST["number"]);
            $age = test_input($_POST["age"]);
              $gender = test_input($_POST["gender"]);
                $email = test_input($_POST["email"]);
                  $password = test_input($_POST["password1"]);
                    
}

function test_input($data) {
    $data = trim($data);
      $data = stripslashes($data);
        $data = htmlspecialchars($data);
          return $data;
}

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

$sql = "INSERT INTO sj_users (name,username,number,age,gender,email,password)
VALUES ('$name','$username','$number','$age','$gender','$email','$password')";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

