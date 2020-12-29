<?php

    $susers = $_POST['user'];
    $spassw = $_POST['pass'];
    echo $susers;
    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
    $sql = "select * from account where username='$susers' and pass='$spassw';";
    $result = mysqli_query($conn,$sql) or die("Unscess");
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['user']=$susers;
        header("Location: insertDeatil.php");

    }
    else{
        header("Location: loginpage.html");

    }
    mysqli_close($conn);

 
?>