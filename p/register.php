<?php
require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $password = stripslashes($_REQUEST['password']);
        $create_datetime = date("Y-m-d H:i:s");



        if ($result) {
            echo "<h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>";
        }
        else {
            "Something went wrong make sure you entered the correct fields"
        }