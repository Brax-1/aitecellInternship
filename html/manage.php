<?php 
session_start();
if(!$_SESSION['user']){
        header('location:loginpage.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/manage.css">
</head>
<body>
    <div class="back"></div>
    <form action = 'delete.php' method='POST'>
    <div class="delete">
        <h3>Delete by Using ID</h3>
        <input type="text" name="id" id="">
    </div>
    <input type="submit" value="REMOVE" id="btn" name="REMOVE" >
    </form>
</body>
</html>