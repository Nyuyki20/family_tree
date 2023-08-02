<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="forms.css">
    <title>Sign Up</title>
  </head>
  <body>
    <form class="form" action="connect.php" method="post">
      <h1>Create Account</h1>
      <label>Name</label><br>
      <input type="text" name="name" value="" required>
      <i class="fa fa-user"></i>
      <br>
      <label>Email</label><br>
      <input type="email" name="email" value="" required>
      <i class="fa fa-envelope"></i>
      <br>
      <label>Contact</label><br>
      <input type="number" name="contact" value="" required>
      <i class="fa fa-address-book"></i>
      <br>
      <label>Address</label><br>
      <input type="text" name="address" value="" required>
      <i class="fa fa-home"></i>
      <br>
      <label>Password</label><br>
      <input type="password" name="password" value="" minlength="8" required>
      <i class="fa fa-lock"></i>
      <br><br><br>
      <button type="submit" value="Register">Sign Up</button><br><br>
    </form>
  </body>
</html>
