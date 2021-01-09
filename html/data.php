<?php
session_start();
$conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
       
$stopic = $_GET['topic'];
$sfullname = $_POST['fullname'];
$smerit = $_POST['merit'];
$sbranch = $_POST['branch'];


        $sql = "insert into student(topic,name,merit,branch) value('{$stopic}','{$sfullname}','{$smerit}','{$sbranch}');";
        $result = mysqli_query($conn,$sql) or die("Unscess");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link rel="stylesheet" href="../css/sweetscroll.css">
</head>
<body>
<script src="../js/sweetalert.min.js"></script>
    <script>
          function validate(){
            swal("Good job!", "Thank You!", "success");

           
        }
           validate();
           function transfer(){
            
            location.replace("https://aitecell.in/jotform.html")
   
}
           
            setTimeout(() => {
                transfer()
                    
            }, 2000);


        
    </script>
</body>
</html>


  
<?php mysqli_close($conn);

?>
