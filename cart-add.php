<?php
	include "common.php";
	$user_id=$_SESSION['id'];
	//echo $_SESSION['id'];
	$item_id= $_GET['id'];
	$cart_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
	$cart_result= mysqli_query($con, $cart_query) or die(mysqli_error($con));
	
	header('location: product.php');
?>