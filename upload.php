<?php include_once("config.php") ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Water Files</title>
    <link rel="stylesheet" type="text/css" href="/style.css?t=<?php echo time(); ?>">
</head>
<body>
    <br>
    <h1>Upload a File</h1>
    <br><br>
    <form action="/p/upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file"><br><br>
<input type="submit" value="submit" name="submit">
</form>
</form>
</body>
</html>