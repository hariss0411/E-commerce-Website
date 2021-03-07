<?php
	include "common.php";
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
   
    <title>Products</title>
  </head>
  <body>
		<?php
		include "header.php";
		include "check-if-added.php";
		?>
		 <p>&nbsp;</p>
		 <br><br>
		  <div class="container">
      <div class="jumbotron">
	   <h1> Welcome to our Lifestyle Store!</h1>
	  <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
      </div>
   
	 <div class="row text-center ">
            <div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price:RS.36000.00</p>
							
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(1)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
							
							
							 <!--<button type="submit" name="submit" class="btn btn-primary btn-block">Add to Cart</button>-->
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="2.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:RS.40000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(2)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:RS.50000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(3)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price:RS.80000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(4)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			
			</div>
			
			<div class="row text-center ">
            <div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="9.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model#101</h3>
                            <p>Price:RS.13000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(5)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="10.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model#201</h3>
                            <p>Price:RS.3000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(6)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="11.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price:RS.8000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(7)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="12.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price:RS.18000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(8)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			
			</div>
			
			<div class="row text-center ">
            <div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="9.jpg" alt="">
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price:RS.13000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(9)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="10.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price:RS.3000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(10)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="11.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price:RS.8000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(11)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			<div class="col-md-3 col-sm-6">
			<div class="thumbnail">
                        <img src="12.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price:RS.18000.00</p>
							<?php
							if (!isset($_SESSION['email'])) 
							{ ?>
						<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
						<?php } else {
									 if (check_if_added_to_cart(12)) {
										  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
									    } else { ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
										<?php } } ?>
                        </div>
                    </div>
            </div>
			
			</div>
			
			 </div>
		<?php
		include "footer.php";
		?>
	</body>
</html>