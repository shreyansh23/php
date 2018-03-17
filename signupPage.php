<!DOCTYPE html>
<html>
<head>
	<title>Sign up Page</title>
</head>
<body>
 <form method="post" action="home.php" onsubmit="return checkForm(this);">
 	<fieldset>
 		<legend>Sign up Page</legend>
<p>Name<input type="text" name="name" placeholder="Enter your name"></p>
<p>Username<input type="text" name="username" placeholder="Enter your username"</p>
<p>
 			Phone Number : 
 			<input type="text" name="phoneNumber" placeholder="Enter your Phone number (+91.........)">
  		</p>
  		<p>
  			Age :
 			<input type="text" name="age" placeholder="Enter your Age">
  		</p>
  		<p> 
  			Gender :
  			<input type="radio" name="gender" value="male" checked> Male
  			<input type="radio" name="gender" value="female"> Female
  			<input type="radio" name="gender" value="other"> Other
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
 	 		<p>
 		City : <input type="text" name="city" placeholder="Enter your City name">	
 		</p>
 		<input type="submit" value="Submit">
 	</fieldset>
 </form>
<script src="js/checkForm.js"></script>
</body>
</html>
