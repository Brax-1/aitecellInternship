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
    <link rel="stylesheet" href="../css/insertDetail.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <div class="back"></div>
  
  <div class="logo">
      <img src="../images/badge.jpg" alt="" srcset="">
      <h2>Army Institute of Technology - Ait Ecell</h2>
     
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

        <div class="content">
            <div class="left">
                <div class="login-content">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                        <img src="../images/project-management.png">
                        <h2 class="title">Internship <?php echo $_SESSION['user'] ?></h2>
                           <div class="input-div one">
                              <div class="i">
                                      <i class="fas fa-edit"></i>
                              </div>
                              <div class="div">
                                      <h5>Topic</h5>
                                      <input type="text" class="input" name="topic" autocomplete="off" required>
                              </div>
                           </div>
                           <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="div">
                                    <h5>Desc</h5>
                                    <input type="text" class="input" name="desc" autocomplete="off" required>
                            </div>
                         </div>
                         <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="div">
                                    <h5>Contact</h5>
                                    <input type="text" class="input" name = "cont" autocomplete="off" required>
                            </div>
                         </div>
                         <div class="input-div one">
                            <div class="i">
                                    <i class="	fas fa-mail-bulk"></i>
                            </div>
                            <div class="div">
                                    <h5>E-mail</h5>
                                    <input type="text" class="input" name = "email" autocomplete="off" required>
                            </div>
                         </div>

                         <div class="input-div one">
                            <div class="i">
                                    <i class="fab fa-chrome"></i>
                            </div>
                            <div class="div">
                                    <h5>Website</h5>
                                    <input type="text" class="input" name = "web" autocomplete="off" required>
                            </div>
                         </div><div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                   
                                    <input type="file" name="image" class="input" id="choose" autocomplete="off" required>
                                   
                            </div>
                         </div>
                          
                        <input type="submit" class="btn" value="Submit">
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