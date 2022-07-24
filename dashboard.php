<?php 

include_once("config.php");

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = "' . $_SESSION['username'] . '"');
$stmt->execute();

foreach ($stmt as $row) {
    $dateregistered = $row["registered"];
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/style.css?t=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, <?php echo $_SESSION['username'] ?></title>
</head>
<body>
    <?php echo "<h1>Hio, " . $_SESSION['username'] . "</h1>"; ?>
    <h2>You registered on <?php echo $dateregistered ?> </h2>
    <h3>What would you like to do?</h3>
    <button onClick="location.assign('/logout')">Logout</button> 
    <button onClick="location.assign('/upload')">Upload</button>
    <h1>Files you own</h1>

    <?php
    $stmt = $pdo->prepare('SELECT * FROM files WHERE author = "' . $_SESSION['username'] . '"');
    $stmt->execute();
    
    foreach ($stmt as $row) {
        $title = $row["author"];
        echo "<div onclick=" . "location.assign('/file/" . $row["title"] . "'); id='public-files'>" . $row["title"] . '<br>Date Created: ' . $row["date_created"] . '<br>Filename: ' . $row["filename"] . '</div></a><br><br>';
    }
    ?>

</body>
</html>