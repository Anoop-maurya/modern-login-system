<!DOCTYPE html>
<html lang="en">
<head>
    <title>php page</title>
</head>
<body>
<?php
if(isset($_REQUEST["username"])){
    $userName = $_POST["username"];
    $email = $_POST["email"];
    $userPassword = $_POST["password"];
    session_start();
    $_SESSION["name"] = $userName;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $userPassword;
    echo "user name is ".$userName;
    echo "<br>";
    echo "user email is ".$email;
    echo "<br>";
    echo "user password is ".$userPassword;
    echo "<br>";
    echo "session start";
    echo "<h3>you have sign up succesfully!</h3>";
}
?>
    <button><a href="sliderpage.html">Login now</a></button>
</body>
</html>