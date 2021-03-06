<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <div class="back"></div>
  <div class="logo">
      <img src="images/badge.jpg" alt="" srcset="">
      <h2>Army Institute of Technology - Ait Ecell</h2>
  </div>

<a href="html/loginpage.html" class="signup">Login</a>
        <div class="content">
            <div class="left">
                <div class="login-content">
                    <form action="signup.php" method="POST">
                        <img src="images/skills.png">
                        <h2 class="title">Signup</h2>
                           <div class="input-div one">
                              <div class="i">
                                      <i class="fas fa-user"></i>
                              </div>
                              <div class="div">
                                      <h5>Username</h5>
                                      <input type="text" class="input" name="user" id="" autocomplete="off"  required>
                              </div>
                           </div>
                           <div class="input-div pass">
                              <div class="i"> 
                                   <i class="fas fa-lock"></i>
                              </div>
                              <div class="div">
                                   <h5>Password</h5>
                                   <input type="password" class="input" name="pass" id="" autocomplete="off" required>
                           </div>
                        </div>
        
                        <input type="submit" class="btn" value="Signup">
                    </form>
                </div>
            </div>
          
            <div class="right">
                <img src="images/signup.png" alt="" srcset="">
            </div>
        </div>



    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>