<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    			session_start();
    			session_destroy();
    			session_start();
    			if(isset($_POST['Login']))
    			{
    				$data_missing=array();
    				if(empty($_POST['name']))
    				{
    					$data_missing[]='name';
    				}
    				else
    				{
    					$name=trim($_POST['name']);
    				}
    				if(empty($_POST['password']))
    				{
    					$data_missing[]='Password';
    				}
    				else
    				{
    					$password=$_POST['password'];
    				}

    						require_once("database.php");
    						$query="SELECT count(*) FROM signup where name=? and password=?";
    						$stmt=mysqli_prepare($conn, $query);
    						$stmt->bind_param("ss",$name,$password);
    						$stmt->execute();
    						mysqli_stmt_bind_result($stmt,$cnt);
    						$stmt->fetch();
    						$stmt->close();
    						$conn->close();
    						if($cnt==1)
    						{
    							echo "Logged in <br>";
    							$_SESSION['login_user']=$name;
    							echo $_SESSION['login_user']." is logged in";
    							header("location: home.php");
    						}
    						else
    						{
    							echo ("Incorrect Username or Password");
    							session_destroy();
    							header('location:login.php?msg=failed');
    						}
    					}
            else
      			{
      				echo "Submit request not received";
      			}
    		?>
  </body>
</html>
