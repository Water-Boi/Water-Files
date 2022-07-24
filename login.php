
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
<input type="email" name="email" placeholder="Email">
<br><br>
<input type="password" name="password" placeholder="Password"> 
<br><br>
<input type="submit" value="submit" name="submit">
</form>
<p>Do you need an account? Sign up <a href="/register">now</a>.</p>
</body>
</html>