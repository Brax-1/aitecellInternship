<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INNOVATION</title>
<link rel="stylesheet" href="../css/internship.css"/>

</head>

<body>
    <?php
    $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
    $sql = "select * from internship ;";
      $result = mysqli_query($conn,$sql) or die("query failed");
      
         
      ?>

<div class="back"></div>
<a href='https://aitecell.in/' class="home">HOME PAGE</a>
<div class="intern">INTERNSHIP</div>

<section class="container">
    <div class="card-wrapper">
        <?php while($res = mysqli_fetch_assoc($result)){ ?>
    <div class="card">
    <div class="topic"><?php echo $res['topic'];?></div>
    <div class="img"><img src="<?php echo $res['image'];?>" alt="" srcset=""></div>
    <div class="desc"><?php echo $res['description'];?></div>
    <div class="Requirements">Requirements : <br><?php echo $res['requirements'];?><br></div>
    <div class="contact">Contact Us: <?php echo $res['contact'];?></div>
    <div class="email">Email Us: <?php echo $res['email'];?></div>
    <div class="apply"><a href="getDataRegistered.php?link=<?php echo $res['link'];?>&topic=<?php echo $res['topic'];?>" class="ref"> Apply</a></div>
</div>
<?php } ?>
</div>

</section>




</body>
</html>
