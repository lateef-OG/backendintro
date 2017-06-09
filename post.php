<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Post</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	<?php 
	$name = "";
	$number = "";
	
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$number = isset($_POST['number']) ? $_POST['number'] : '';
	?>
    <div class="row">
      <div class="large-8 medium-centered columns">
	  		 <form action = "post.php" method = "post">
				   <div class = "row">
					<div class="large-6 medium-6 columns">		
						<input type = "text" name = "name" placeholder= "Enter your name">
					</div>
					<div class="large-6 medium-6 columns">
						<input type = "number" name = "number" placeholder= "Enter a number">
					</div>
				   </div>	
					<input type="submit" value="Submit">
				 </form>
			 </div>
      </div>
	  <div class="large-8 medium-centered columns">
		<h2><?php echo "Hello " . $name ; ?></h2><br>
		<h4><?php 
		 for($i = 1; $i <= $number; $i = $i + 1 ){
			if($i % 2 == 0){
				echo "<i>yinka </i>";
			}else{
				echo "<strong>" . $i . "</strong>" . "  ";
			}
		 }
		 
		?></h4>
	  </div>
    </div>
	
        
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
