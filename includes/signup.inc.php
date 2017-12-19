<?php
	include_once 'dbh.inc.php';
	if(isset($_POST['submit']))
	{
		$first = mysqli_real_escape_string($conn,$_POST['first']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$num = mysqli_real_escape_string($conn,$_POST['number']);
	 
 	if(empty($first)||empty($email)||empty($num))
 	{
 			header("Location: ../sign.php");
 			exit();	
 	}
 	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
 	{
 		header("Location: ../sign.php?sign=invalidemail");
 		exit();
 	}
 
 
	$sql = "INSERT INTO users (name,email,number) VALUES ('$first', '$email','$num');";
	mysqli_query($conn, $sql);
	setcookie('username', "$num", time()+1800);
	
	header("Location: intro.php");

	}
	else
	header("Location: ../sign.php");

	?>