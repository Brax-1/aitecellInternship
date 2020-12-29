<?php
session_start();
    $sid = $_POST['id'];
$suser = $_SESSION['user'];

    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");

    $sql = "DELETE FROM internship WHERE internship.id = {$sid};";
    $result = mysqli_query($conn,$sql) or die("Unscess");
    header("Location: deletepage.php");
    mysqli_close($conn);
?>