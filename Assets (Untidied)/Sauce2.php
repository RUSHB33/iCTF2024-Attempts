<?php
error_reporting(0);
if (!isset($_COOKIE['hihi'])) {
  setcookie('hihi', 'FakeFlag{try_harder_for_flag_lmfao}', time() + (86400 * 30), '/', '', true, false); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $_SESSION['isAlertTriggered'] = false;
    echo "<p>Hello, <b>$name</b>!</p>"; 

    if (stripos($name, '<script>') !== false ) {
        echo '<script>alert("Why are you trying xss?");</script>';
        $_SESSION['isAlertTriggered'] = true;
    }
} else {
    echo "<p>No data submitted.</p>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2 yes page 2</title>
</head>
<body>
    <h1>2nd Portal wohooo</h1>
    <form action="" method="POST">
        <label for="input">Enter your name:</label><br>
        <input type="text" id="input" name="name"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>