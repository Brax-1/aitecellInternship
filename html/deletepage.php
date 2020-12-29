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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete</title>
  <link rel="stylesheet" href="../css/delete.css">
</head>
<body>
<?php
$suser = $_SESSION['user'];
    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
    $sql = "select * from internship where username = '{$suser}'";
        $result=mysqli_query($conn,$sql) or die("query unscessfull");

        if (mysqli_num_rows($result)>0){    // mysqli_num_rows is the function to check the number of rows
                

        

    ?>
    <div id="wrapper">
        <div id="header">
            <h1>Delete (<?php echo $suser?>)</h1>
        </div>
      


<div id="main-content">
    <h2>All Records</h2>
  


    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Topic</th>
        <th>Desc</th>
        <th>Contact</th>
        <th>Email</th>
        </thead>
        <tbody>
            <?php 
                while($row=mysqli_fetch_assoc($result)){  // mqsli_fe.. will help us to fetch data form result row by row in form of array

                
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['topic']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['email']; ?></td>
             
            </tr>
                <?php } ?>
            
                    </tbody>
    </table>
    <a href='manageEdit.php' class='edit'>Edit</a>   
                    <a href='manage.php' class='del'>Delete</a>
                    <a href='insertdeatil.php' class='ins'>Insert</a>
        <?php } 
        else{
            echo 'No Data found'; ?>
            <a href='insertdeatil.php' class='ins'>Insert</a>
   <?php     }
        ?>
        
</div>
</div>
</body>
</html>
