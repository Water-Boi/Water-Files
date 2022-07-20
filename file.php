<?php
include_once("config.php");
$name = $_GET['name'];
?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Water Files</title>
    <link rel="stylesheet" type="text/css" href="/style.css?t=<?php echo time(); ?>">
</head>
<body>
    <br>
    <?php
    $stmt = $pdo->prepare('SELECT * FROM files WHERE title = :name');
    $stmt->execute([ 'name' => $name ]);

$controls = '';



    foreach ($stmt as $row) {

        if ($row['file_type'] == 'video') {
            $controls = ' controls';
           }

    echo '<' . $row['file_type'] . ' src="' . $row["filename"] . '"' . $controls . '>';
    }
    ?>
</body>
</html>