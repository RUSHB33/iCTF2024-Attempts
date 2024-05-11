<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 33333333</title>
</head>
<body>
    <h1>Don't forget to check your Regular daily Expressions! >_< </h1>
    <form action="" method="POST">
        <label for="input">Enter your input:</label><br>
        <textarea id="input" name="input" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php 
error_reporting(0);
if (!isset($_POST['input'])) {
    die("No input provided");
} else {

    $input = $_POST['input'];
    if (preg_match("/^(.*?)+$/s", $input)) {
        echo "Find me the flag pls?";
    } else {
        echo "Here is your flag " . "https://youtu.be/dQw4w9WgXcQ?si=IW6h-4bQhrlHLUFJ";
    }
}

?>