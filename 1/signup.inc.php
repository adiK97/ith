<?php
	include_once 'dbh.inc.php';
	if(isset($_POST['submit']))
	{
		$first = mysqli_real_escape_string($conn,$_POST['first']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$num = mysqli_real_escape_string($conn,$_POST['number']);
	 
 	if(empty($first)||empty($email)||empty($num))
 	{
 			header("Location: sign.php");
 			exit();	
 	}
 	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
 	{
 		header("Location: sign.php?sign=invalidemail");
 		exit();
 	}
 
 
	$sql = "INSERT INTO users (name,email,number,slot) VALUES ('$first', '$email','$num','1');";
	mysqli_query($conn, $sql);
	setcookie('username', "$num", time()+2900);
	setcookie('score', "0", time()+2900);

	
	header("Location: intro.php");

	}
	else

	?>