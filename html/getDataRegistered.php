<?php 
    $topic = $_GET['topic'];
    $link = $_GET['link'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <div class="back"></div>
  <div class="logo">
      <img src="../images/badge.jpg" alt="" srcset="">
      <h2>Army Institute of Technology - Ait Ecell</h2>
  </div>
<!-- //ok -->
<a href="studentdata.php" class="mainpage">MAIN PAGE</a>
        <div class="content">
            <div class="left">
                <div class="login-content">
                    <form action="data.php?link=<?php echo $link?>&topic=<?php echo $topic?>" method="POST">
                        <img src="../images/skills.png">
                        <h2 class="title">Details</h2>
                           <div class="input-div one">
                              <div class="i">
                                      <i class="fas fa-user"></i>
                              </div>
                              <div class="div">
                                      <h5>Fill Name</h5>
                                      <input type="text" class="input" name="fullname" autocomplete="off" id="" required>
                              </div>
                           </div>
                           <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                    <h5>Merit Number</h5>
                                    <input type="text" class="input" name="merit" autocomplete="off" id="" required>
                            </div>
                         </div>
                         <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                    <h5>Branch with year</h5>
                                    <input type="text" class="input" name="branch" autocomplete="off" id="" required>
                            </div>
                         </div>
                         
         
                        <input type="submit" class="btn" value="Next">
                    </form>
                </div>
            </div>
          
            <div class="right">
                <img src="../images/final3ohk.png" alt="" srcset="">
            </div>
        </div>



    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>