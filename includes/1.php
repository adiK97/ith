<!DOCTYPE html>
<?php require 'timer.php' ?>
<html>
	<head>
		<script url:"../includes/nb.js"></script>
		<link rel="stylesheet" href="	../css/bootstrap.min.css">
		<script src="../js/bootstrap.min.js"></script>
				<script src="../js/countdown.js"></script>

	<style>
		@font-face {
		    font-family: 'harry_potterregular';
    		src: url('../fonts/harrp___-webfont.woff2') format('woff2'),
         	url('../fonts/harrp___-webfont.woff') format('woff');
    		font-weight: normal;
    		font-style: normal;

			}
			
			
			
		body {
    			background: url("images/a.jpg");
			    background-repeat: no-repeat;
			    size: 1920px 1080px;
    			
		}
		h1 {
			padding-top:30px;
		    font-family: 'harry_potterregular';
		    font-size: 75px;
			text-align: center;
			color:black;
			}

	

		#form1 {
			
				padding: 370px ;
			   	text-align: center;
			    font-family: 'harry_potterregular';
    			font-size:25px;
    			color:white;
		}
		#form1 input{
				background: transparent;
		} 

		input[type=input] {
		padding: 20px;
		text-size: 5px;
		font-family: 'harry_potterregular';
    			box-sizing: border-box;
    			border: 2px transparent blue ;
    			border-radius: 10px;
    			color:black;
		}
		button{
			
							font-family: 'harry_potterregular';
						font-size=40px;
		}
		
	</style>
	</head>
	
	<body>
		<form action="" method="post">
			<h1>QUESTION ONE<h1>
		<input type="input" name="ans" id="ans"	 autocomplete="off" placeholder="YOUR ANSWER">	
			<!--	<center><input type="input" name="question-2-answers" size="35" autocomplete="off" id="question-2-answers" value="" /> -->

		
<?php
		setcookie('score', "5", time()+1800);
		
		error_reporting(0);
		$ans2 = ($_POST['ans']);

if ($ans2 == "ad") 
{
	include_once '../includes/dbh.inc.php';
	$sql = "INSERT INTO users (score) VALUES ('1') WHERE number='123'";
	mysqli_query($conn, $sql);
	
		
	header("Location: intro.php");
	
}
 ?>
</body>
</html>
