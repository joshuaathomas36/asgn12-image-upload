<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Using PHP</title>
    <link rel ="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php if (isset($_GET['error'])): ?>
        <p><?= $_GET['error']; ?></p>
    <?php endif ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>