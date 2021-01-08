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
    <title>Edit</title>
    <link rel="stylesheet" href="../css/insertDetail.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <div class="back"></div>
  <div class="logo">
      <img src="../images/badge.jpg" alt="" srcset="">
      <h2>Army Institute of Technology - Ait Ecell</h2>
      <form action="delete.php" method="post">

      </form>
      <?php
      $id = $_POST['id'];
      $suser = $_SESSION['user'];
              $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
			  $sql = "select * from internship where id={$id} and username='{$suser}'; ";
                $result = mysqli_query($conn,$sql) or die("query failed");
                
                   
				?>
				
			

  </div>
  <div class="remove">
  <div class="del">
      <a href="deletepage.php">    <img src="../images/delete.png" alt="" srcset="">      </a></div>
      <div class="logout">
      <form action="logout.php">
              <div class="align">
      <input type="submit" class="ins" value="LOGOUT"></div>
      </form></div>
 </div>
      <?php while($res = mysqli_fetch_assoc($result)){ ?>
        <div class="content">
            <div class="left">
                <div class="login-content">
                    <form action="update.php?id=<?php echo $id ?>" method="POST">
                        <img src="../images/project-management.png">
                        <h2 class="title">Internship <?php echo $_SESSION['user'] ?></h2>
                           <div class="input-div one">
                              <div class="i">
                                      <i class="fas fa-edit"></i>
                              </div>
                              <div class="div">
                                      <h5>Topic</h5>
                                      <input type="text" class="input" name="topic" value="<?php echo $res['topic'];?>" autocomplete="off" required>
                              </div>
                           </div>
                           <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="div">
                                    <h5>Desc</h5>
                                    <input type="text" class="input" name="desc"  value="<?php echo $res['description'];?>" autocomplete="off" required>
                            </div>
                         </div>
                         <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-file-code"></i>
                            </div>
                            <div class="div">
                                    <h5>Requirements</h5>
                                    <input type="text" class="input" name="req" value="<?php echo $res['requirements'];?>" autocomplete="off" required>
                            </div>
                         </div>

                         <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="div">
                                    <h5>Contact</h5>
                                    <input type="text" class="input" name = "cont" value="<?php echo $res['contact'];?>"  autocomplete="off" required>
                            </div>
                         </div>
                         <div class="input-div one">
                            <div class="i">
                                    <i class="	fas fa-mail-bulk"></i>
                            </div>
                            <div class="div">
                                    <h5>E-mail</h5>
                                    <input type="text" class="input" name = "email"  value="<?php echo $res['email'];?>" autocomplete="off" required>
                            </div>
                         </div>

                         <div class="input-div one">
                            <div class="i">
                                    <i class="fab fa-chrome"></i>
                            </div>
                            <div class="div">
                                    <h5>Website</h5>
                                    <input type="text" class="input" name = "web" value="<?php echo $res['link'];?>"  autocomplete="off" required>
                            </div>
                         </div>
                          
                        <input type="submit" class="btn" value="Submit">
                    </form>
                </div>
            </div>
          <?php } ?>
            <div class="right">
                <img src="../images/final3ohk.png" alt="" srcset="">
            </div>
        </div>



    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>