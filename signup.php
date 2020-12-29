<?php

    $suser = $_POST['user'];
    $spass = $_POST['pass'];
   

    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
    $sql = "insert into account(username,pass) value('{$suser}','{$spass}');";
    $result = mysqli_query($conn,$sql) or die("Unscess");
    header("Location: html/loginpage.html");
    mysqli_close($conn);

?>
