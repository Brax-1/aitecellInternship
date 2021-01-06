<?php
session_start();
$conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
       
$stopic = $_GET['topic'];
$slink = $_GET['link'];
$sfullname = $_POST['fullname'];
$smerit = $_POST['merit'];
$sbranch = $_POST['branch'];


        $sql = "insert into student(topic,name,merit,branch) value('{$stopic}','{$sfullname}','{$smerit}','{$sbranch}');";
        $result = mysqli_query($conn,$sql) or die("Unscess");
       
   

        header("Location: https://{$slink}");
        mysqli_close($conn);

?>
