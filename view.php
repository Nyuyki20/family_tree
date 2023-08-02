
    
 
    
    <?php 
        // Include the database configuration file  
        require_once 'dbConfig.php'; 
        
        // Get image data from database 
        $sql = "SELECT image FROM images ORDER BY id DESC";
        $result = $db->query($sql); 
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="main_container">
        <div class="gallery"> 
            <?php if($result->num_rows > 0){ ?> 
            <div class="img-box">
            <?php while($row = $result->fetch_assoc()){ ?> 
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
            <?php } ?> 
            </div>    
                
        </div> 
        <?php }else{ ?> 
            <p class="status error">Image(s) not found...</p> 
        <?php } ?>

        <button onclick="myFunction()">Upload Image</button>
        <a href="index.php"><button>Home</button></a>

        <div class="popup">
            <div class="wrapper" id="myPopup">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image">Select Image File:</label>
                        <input type="file" name="image" class="form-control"> 
                    </div>
                    
                    <input type="submit" name="submit" class="btn-secondary" value="Upload" style="margin-left: 35%;">
                    <?php 
                        include 'upload.php';
                    ?>
                </form><br>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("active");
        }
    </script>


</body>
</html>