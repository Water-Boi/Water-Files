<?php include_once("config.php") ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Water Files</title>
    <link rel="stylesheet" type="text/css" href="/style.css?t=<?php echo time(); ?>">
</head>
<body>
    <br>
    <h1>Register</h1>
    <h2>Get access to uploading unlimited files today!</h2>
<form action="/p/register.php" method="POST">
    <br>
<input type="username" name="username" placeholder="Username">
<br><br>
<input type="email" name="email" placeholder="E-mail">
<br><br>
<input type="password" name="password" placeholder="Password"> 
<br><br>
<input type="password" name="cpassword" placeholder="Confirm Password"> 
<br><br>
<input type="submit" value="submit" name="submit">
</form>
<p>Already have an account? Sign in <a href="/login">here</a>.</p>
</body>
</html>