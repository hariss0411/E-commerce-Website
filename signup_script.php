<?php
	require "common.php";
	$email = $_POST['email'];
	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$name = $_POST['name'];
	$regex_name="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$";
	$password = md5($_POST['password']);
	$contact = $_POST['contact'];
	$city = $_POST['city'];
	$address= $_POST['address'];
	if (!preg_match($regex_name, $name)) {
	header('location: signup.php?name_error=enter correct name');
	}/*
	if (!preg_match($regex_email, $email)) {
	header('location: signup.php?email_error=enter correct email');
	}
	if (strlen($password) < 6) {
	header('location: signup.php?password_error=enter correct password');
	}
	if (strlen($contact) !=10) {
	header('location: signup.php?contact_error=enter correct contact');
	}*/
	$signup_query = "insert into users (name,email,password,contact,city,address)values ('$name','$email','$password','$contact','$city', '$address')";
	$login_submit = mysqli_query($con,$signup_query) or die(mysqli_error($con));
	$_SESSION['email'] = $email;
	$_SESSION['id'] = mysqli_insert_id($con);
	header('location: product.php');
	echo "User successfully inserted";
?>