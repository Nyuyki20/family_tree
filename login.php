<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="forms.css">
		<title>Form</title>
  </head>
  <body>
    <div>
      <form class="form" action="login_handler.php" method="post">
        <h1>Log In</h1>
        <label for="">Name</label><br>
        <input type="text" name="name" value="" required>
        <i class="fa fa-user"></i>
        <br>
        <label for="">Password</label><br>
        <input type="password" name="password" value="" minlength="8" required>
        <i class="fa fa-lock"></i>
        <br>
        <?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
        <p><a href="#">Forgot password?</a></p>
        <button type="Login" value="Login" name="Login" class="btn">Login</button><br><br>
        <span>Don't have an account yet? <a href="signup.php">Sign Up</a></span>
      </form>
    </div>
  </body>
</html>