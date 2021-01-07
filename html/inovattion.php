<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INNOVATION</title>
<link rel="stylesheet" href="../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/lightslider.css"/>

<script type="text/javascript" src="../js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="../js/lightslider.js"></script>
</head>

<body>
	
<a href='https://aitecell.in/' class="home">HOME PAGE</a>
<div class="back">

</div>
	<div class="container">

		<ul id="autoWidth" class="cs-hidden">

		<?php
              $conn = mysqli_connect("remotemysql.com","MIgbqQ56pk","k4T02GvM0s","MIgbqQ56pk") or die("Connection failed");
			  $sql = "select * from internship ;";
                $result = mysqli_query($conn,$sql) or die("query failed");
                
                   
				?>
				
				<?php while($res = mysqli_fetch_assoc($result)){ ?>

		<li class="item-a">

			<div class="box">
			<p class="marvel"><?php echo $res['topic'];?></p>
	
			<img src="<?php echo $res['image'];?>" class="model">
		
			<div class="details">
			
			<p><?php echo $res['description'];?><br>Contact: <?php echo $res['contact'];?><br> Email: <?php echo $res['email'];?></p>

			<form action="data.php?table=<?php echo $res['topic'];?>" method="post"></form>
		
			<a href="getDataRegistered.php?link=<?php echo $res['link'];?>&topic=<?php echo $res['topic'];?>" class="btn">Get Link</a>
	
			</div>
			
			</div>
			</li>
			<?php } ?>


 
		</ul>
			
			
	
	
	</div>
	
	
<script src="../js/script.js" type="text/javascript"></script>
</body>
</html>
