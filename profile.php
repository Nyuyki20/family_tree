<?php 
    include ('dbConfig.php');
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $biography = $_POST['biography'];

        // $query = mysqli_query($con, "INSERT into family_info (username, biography) VALUE ('$username', '$biography')" );

        $sql = "INSERT into family_info (username, biography) VALUES ('$username', '$biography')"; 
        $insert = $db->query($sql);
        if($insert) {
            echo "<script>alert('Record added successfuly')</script>";
        } else {
            echo "<script>alert('There was an error')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .main {
        display: flex;
        align-items:center;
        justify-content: center;
    }
    .forms {
        width: 250px;
        height: auto;
        margin-top: 200px;
        box-shadow: 0px 2px 5px 5px rgba(0,0,0,0.1);
        padding: 20px;
        border-radius: 10px;
    }
</style>
<body>
    <div class="main">
        <div class="info">
            <?php ?>
        </div>
        <div class="popupss">
            <div class="forms">
                <form action="" method="POST">
                    <input type="text" placeholder="enter name" name="username"><br><br>
                    <textarea name="biography" id="" cols="30" rows="10" placeholder="Enter biography"></textarea>

                    <input type="submit" name="submit" value="submit">
                    <?php ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>