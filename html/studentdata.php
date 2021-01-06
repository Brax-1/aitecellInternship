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
    $sql = "select * from internship;";
    $result=mysqli_query($conn,$sql) or die("query unscessfull");

 
        if (mysqli_num_rows($result)>0){    // mysqli_num_rows is the function to check the number of rows
                

        

    ?>
    <div id="wrapper">
        <div id="header">
            <h1>Students Data</h1>
        </div>
        <div id="main-content">



 <?php   // mysqli_num_rows is the function to check the number of rows
                while($top=mysqli_fetch_assoc($result)){ 

        
      
                ?>
     
                <h2><?php echo $top['topic']?></h2>


            <?php 
            $sql = "select * from student where topic='{$top['topic']}';";
            $res=mysqli_query($conn,$sql) or die("query unscessfull");
            if (mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                     // mqsli_fe.. will help us to fetch data form result row by row in form of array

                
            ?>
                <table cellpadding="7px">
        <thead>
        <th>Merit</th>
        <th>Name</th>
        <th>Topic</th>
        <th>Branch</th>
        
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row['merit']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['topic']; ?></td>
                <td><?php echo $row['branch']; ?></td>
             
            </tr>
                <?php } ?>
            
                    </tbody>
    </table>

        <?php }else{

         ?>
            <a  class='ins'>No one did yet...</a>
    
    <?php
    }
    } }
        else{
            echo 'No Data found'; ?>
            <a  class='ins'>No one did yet...</a>
   <?php     }
        ?>
        
</div>
</div>
</body>
</html>
