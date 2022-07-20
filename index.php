<?php include_once("config.php") ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Water Files</title>
    <link rel="stylesheet" type="text/css" href="/style.css?t=<?php echo time(); ?>">
</head>
<body>
    <br>
    <h1>Welcome to Water Files</h1>
    <h2>Open community for image and videos files</h2>
    <br><br>
    <button onClick="location.assign('/upload')">Upload a File</button>
    <br><br>
    <p>Public stuff</p>
    <?php
    $stmt = $pdo->prepare('SELECT * FROM files WHERE public = public');
    $stmt->execute();
    
    foreach ($stmt as $row) {
        $title = $row["author"];
        echo "<div onclick=" . "location.assign('/file/" . $row["title"] . "'); id='public-files'>" . $row["title"] . '<br>Date Created: ' . $row["date_created"] . '<br>Filename: ' . $row["filename"] . '</div></a><br><br>';
    }
    ?>
</body>
</html>