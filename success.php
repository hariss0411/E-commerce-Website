<?php
	include "common.php";
	if (!isset($_SESSION['email'])) { 
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css"/>
   
    <title>Success</title>
  </head>
  <body>
			<?php
		include "header.php";
		$user_id=$_SESSION['id'];
		echo $user_id;
		$success_query="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' ";
		$success_result=mysqli_query($con, $success_query) or die(mysqli_error($con));
		?>
		 <p>&nbsp;</p>
		 <br><br>
		 <div class="container">
      <div class="jumbotron">
	   <h1> Your order is confirmed.!</h1>
	  <p> Thank you for shopping with us. <a href="product.php">Click here</a> to purchase any other item.</p>
      </div>
	  </div>
		<?php
		include "footer.php";
		?>
	</body>
</html>