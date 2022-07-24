<?php


$server = "localhost";
$user = "root";
$pass = "";
$database = "stuff";

$conn = mysqli_connect($server, $user, $pass, $database);


        $pdo = new PDO("mysql:host=localhost; user=root; dbname=stuff; charset=utf8mb4");
