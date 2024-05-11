<!DOCTYPE html>
<html>
<head>
<title>ICTF Challenge</title>
</head>
<body>
	<h1>This is your ordinary login page</h1>
	<form method="post" action="">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" required>
		<br>
	<label for="password">Password:</label>
		<input type="password" name="password" id="password" required>
		<br>
		<input type="submit" value="Login">
        <!--https://www.youtube.com/watch?v=0tOXxuLcaog_-->
	</form>
</body>
</html>

<?php
error_reporting(0);
// Get the user's input from the login form
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $password) {
        print "Both cannot be the same";
    } elseif (strpos($username, $password) !== false) {
        print "Not fulfilling the requirements~";
    } elseif(strlen($username)!==strlen($password)){
        print "Opps not the correct one!";
    }elseif(substr($username,0,3)=== substr($password,0,3)){
        print "Hmmm.... not this either";
    }
    elseif ($username == $password) {
        print "Successful!!!";
        header('https://youtu.be/mLW35YMzELE?si=7NGo6j6VUTcsEu_0&t=50');
    } else {
        print "Invalid password";
    }
}
?>