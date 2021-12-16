<?php 
require_once 'initialize.php';
$images = UploadImage::find_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Birds</title>
    <link rel ="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <a href="index.php">&#8592;</a>
    <?php
        foreach($images as $image) {
           echo "<div class='alb'><img src=\"uploaded-images/$image->image_url\"></div>";
        }
    ?>
       
</body>
</html>