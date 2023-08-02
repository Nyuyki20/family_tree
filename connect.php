<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
       body {
         display: flex;
         align-items: center;
         justify-content: center;
         min-height: 90vh;
         font-size: 40px;
       }
       button {
         margin-top: 200px;
         margin-left: -350px;
         width: 10%;
         height: 40px;
         border-radius: 20px;
         border: none;
         background: black;
         color: white;
         font-size: 20px;
         font-weight: bold;
       }
       a {
         text-decoration: none;
         color: white;
       }
     </style>
   </head>
   <body>
     <?php
         $name = $_POST['name'];
         $email = $_POST['email'];
         $contact = $_POST['contact'];
         $address = $_POST['address'];
         $password = $_POST['password'];

         //$passwordHash = password_hash($password, PASSWORD_DEFAULT);

         $conn = new mysqli('localhost', 'root', '', 'family_tree');
         if($conn->connect_error){
           die('Connection Failed : '.$conn->connect_error);
         }else{
           $stmt = $conn->prepare("insert into signup(name, email, contact, address, password)
           values(?, ?, ?, ?, ?)");
           $stmt->bind_param("sssss", $name, $email, $contact, $address, $password);
           $stmt->execute();
           echo "Registration Successful...";
           $stmt->close();
           $conn->close();
         }
      ?>
      <button type="button" name="button"><a href="login.php">Log In</a></button>
   </body>
 </html>