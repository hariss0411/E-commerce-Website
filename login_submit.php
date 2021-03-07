<?php
	include "common.php";
	  
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = $_POST['password'];
	$password = md5($password);
	$user_query = "select id,password from  users where email='$email'";
	$login_submits = mysqli_query($con, $user_query) or die(mysqli_error($con));
	if( mysqli_num_rows($login_submits) == 0){
		//echo"1111";
	}
	else{
		$row=mysqli_fetch_array($login_submits);
		if(md5($row["password"])==$password){
			
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $row["id"];
			//echo $_SESSION['id'];
			header('location: product.php');
			
		}
		else{
			echo $password;
			echo "\n";
			echo $row["password"];
			echo"invalid";
		}
	}
?>	