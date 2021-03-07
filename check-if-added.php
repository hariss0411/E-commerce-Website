<?php
	
	function check_if_added_to_cart($item_id){
		include "common.php";
		$user_id=$_SESSION['id'];
		$check_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
		$check_result= mysqli_query($con, $check_query) or die(mysqli_error($con));
		if( mysqli_num_rows($check_result) >= 1){
			return 1;
		}
		else{
			return 0;
		}
	}
?>