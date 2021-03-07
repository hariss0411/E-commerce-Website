<?php
	include "common.php";
	if (!isset($_SESSION['email'])) { 
		header('location: login.php');
	}
	$user_id=$_SESSION['id'];
	$old_password=$_POST["old_password"];
	$new_password=$_POST["new_password"];
	$retype_password=$_POST["re_password"];
	$pass_query="select password from users where id='$user_id'";
	$pass_result= mysqli_query($con, $pass_query) or die(mysqli_error($con));
	$row=mysqli_fetch_array($pass_result);
	if($row["password"]!=$old_password){
		header('location: setting.php');
	}
	if($new_password==$retype_password){
		$update_query="update users set password='$new_password' where id='$user_id'";
		$update_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
		header('location: product.php');
	}
?>