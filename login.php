<?php
if(isset($_REQUEST["useremail"])){
    session_start();
    if($_POST["useremail"] == $_SESSION["email"]){
        if($_POST["password"] == $_SESSION["password"]){
            echo "You have login succesfully";
            echo "<br>";
            echo "Now you can use our services";
            exit();
        }
    }
    else if($_POST["useremail"] != $_SESSION["email"]){
        die("this email is not register");
    }else if($_POST["password"] != $_SESSION["password"]){
        die("you have entered wrong password");
    }
    else{
        die("something went wrong!");
    }
}
?>