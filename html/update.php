<?php
  $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
session_start();
  
    $stopic = $_POST['topic'];
    $sdesc = $_POST['desc'];
    $sreq = $_POST['req'];


    $scont = $_POST['cont'];
    $semail = $_POST['email'];
    $sweb = $_POST['web'];
$suser = $_SESSION['user'];
    $sid = $_GET['id'];

    
        $sql = "UPDATE internship SET topic = '{$stopic}',requirements = '{$sreq}', `description` = '{$sdesc}',  `contact` = '{$scont}', `email` = '{$semail}', `link` = '{$sweb}' WHERE `id` = {$sid} ";
        $result = mysqli_query($conn,$sql) or die("Unscess");
        header("Location: deletepage.php");


  
?>