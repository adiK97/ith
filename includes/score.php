<!--<!DOCTYPE HTML>

<html>
	<head>
		
	</head>
	
	<body>
		
		
	</body>
</html>-->
<?php
		include_once 'dbh.inc.php';
		
		if(isset($_POST['submit']))
	{
	
		$num = mysqli_real_escape_string($conn,$_POST['ans']);
		
		$sql = "INSERT INTO users (score) VALUES ($num);";
	
	}	


?>