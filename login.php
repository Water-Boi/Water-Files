<?php include_once("config.php") ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Water Files</title>
    <link rel="stylesheet" type="text/css" href="/style.css?t=<?php echo time(); ?>">
</head>
<body>
    <br>
    <h1>Login</h1>
    <h2>To get access to you account</h2>
<form action="/p/login.php" method="POST">
    <br>
<input type="username" name="username" placeholder="CoolUsername123">
<br><br>
<input type="password" name="password" placeholder="EpicPass123!"> 
<br><br>
<input type="submit" value="submit" name="submit">
</form>
<p>Do you need an account? Sign up <a href="/register">now</a>.</p>
</body>
</html>