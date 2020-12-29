<?php
  $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
session_start();
  
    $stopic = $_POST['topic'];
    $sdesc = $_POST['desc'];
    $simg = $_FILES['image'];

    $simagefile = $simg['name'];
    $sfileerror = $simg['error'];
    $sfiletemp = $simg['tmp_name'];

    $sfileext = explode('.',$simagefile);
    $filecheck = strtolower(end($sfileext));
    $fileextstored = array('png','jpg','jpeg');
 
    $scont = $_POST['cont'];
    $semail = $_POST['email'];
    $sweb = $_POST['web'];
$suser = $_SESSION['user'];
    $sid = $_GET['id'];
    if(in_array($filecheck,$fileextstored)){
        $destinationfile = '../images/'.$simagefile;
        move_uploaded_file($sfiletemp,$destinationfile);
        $sql = "UPDATE internship SET topic = '{$stopic}', `description` = '{$sdesc}', `image` = '{$destinationfile}', `contact` = '{$scont}', `email` = '{$semail}', `link` = '{$sweb}' WHERE `id` = {$sid} ";
        $result = mysqli_query($conn,$sql) or die("Unscess");
        header("Location: deletepage.php");
        mysqli_close($conn);
    }

  
?>