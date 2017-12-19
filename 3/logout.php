<!DOCTYPE html>

<?php

	include_once 'dbh.inc.php';


	$num = $_COOKIE['username'];
	$sc = $_COOKIE['score'];
$sql = "UPDATE users SET score= $sc WHERE number= $num";
	mysqli_query($conn, $sql);
	

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="	../css/bootstrap.min.css">
		<script src="../js/bootstrap.min.js"></script>
		<script src="nb.js"></script>

	<style>
		
		@font-face {
				    font-family: 'harry_potterregular';
    				src: url('../fonts/harrp___-webfont.woff2') format('woff2'),
         			url('../fonts/harrp___-webfont.woff') format('woff');
    				font-weight: normal;
    				font-style: normal;

			}	
			
			
			
		body {
    				background: url("../images/bg/lgg.jpg");
			    	background-repeat: no-repeat;
			    	size: 1920px 1080px;
					
    			
		}
		h1 {
				padding-top:5px;
			    font-family: 'harry_potterregular';
			    font-size: 75px;
				text-align: center;
				color:black;
			}

	

		#form1 {
			
			
			   	text-align: center;
			    font-family: 'harry_potterregular';
    			font-size:25px;
    			color:black;
		}
		#form1 input{
			
				background: transparent;
		
		} 
		
			input[type=input] {
    	
    			font-size:50px;
    			box-sizing: border-box;
    			border: 2px transparent blue ;
    			border-radius: 10px;
    			width:700px;
    			height:100px;
    			color:black;
		}
		
		button{
				font-family: 'harry_potterregular';
				font-size=40px;
		}
		
		div.image {
 		
 		  content:url("../images/luna.jpg");
 		   height: 400px;
		   width: 400px;
		margin:auto;
}​
	
	</style>
	
	</head>
	
	<body>
		
			<h1>THANK YOU FOR PLAYING ITH!<h1>

			
			
</body>
</html>
