<?php 

include '../config.php';

session_start();


if (isset($_SESSION['username'])) {
    header("Location: /");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: /dashboard");
	} else {
		echo "Email or password is incorrect. Please try again.";
	}
}

?>