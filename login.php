<?php
session_start();
include("sqlconfig.php");

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $sql = "SELECT * FROM users WHERE username LIKE '" . $username . "' LIMIT 1";
    $result = mysqli_query($db, $sql);
    $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //echo($rows["pass"]);
    if(password_verify($_POST["password"], $rows["pass"])) { 
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header('Location: list.php');
        //echo("Done");
    }
    else {
        sleep(2);
        header('Location: index.php');
    }
}
else {
    header('Location: index.php');
}
