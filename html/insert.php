<?php
session_start();
$conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
       
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

    if(in_array($filecheck,$fileextstored)){
        $destinationfile = '../images/'.$simagefile;
        move_uploaded_file($sfiletemp,$destinationfile);

        $sql = "insert into internship(topic,description,image,contact,email,link,username) value('{$stopic}','{$sdesc}','{$destinationfile}','{$scont}','{$semail}','{$sweb}','{$suser}');";
        $result = mysqli_query($conn,$sql) or die("Unscess");
        header("Location: inovattion.php");
        mysqli_close($conn);
    }
?>
