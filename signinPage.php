
<html>
<head>
  <title>signinPage</title>
</head>
<body>
   <form action="signinPage.php" method="POST">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="image_here" >
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" >
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> 

</body>
</html>

