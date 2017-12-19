<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>
	<script url:"../includes/nb.js"></script>

<style>

		@font-face {
		    font-family: 'harry_potterregular';
    		src: url('../fonts/harrp___-webfont.woff2') format('woff2'),
         	url('../fonts/harrp___-webfont.woff') format('woff');
    		font-weight: normal;
    		font-style: normal;

			}
			
			
			
		body {
    			background: url("../images/a.jpg");
			    background-repeat: no-repeat;
			   background-size: cover;
				  color:white;
		}
		h1 {
			padding-top:30px;
		    font-family: 'harry_potterregular';
		    font-size: 75px;
			text-align: center;
			color:white;
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

		input[type=text] {
    			margin: 8px 0;
    			box-sizing: border-box;
    			border: 2px transparent blue ;
    			border-radius: 10px;
    			color:white;
		}
		button{
			
						font-family: 'harry_potterregular';
						font-size=40px;
		}
		h2{
		    font-family: 'harry_potterregular';
		    font-size: 30px;
			text-align: center;
			color:white;
			
			
		}

</style>
	
		<title>WELCOME TO ITH</title>

</head>

<body>
	
			<h1>WELCOME TO   INTERNET TREASURE HUNT</h1>
		
		<form id="form1" action="signup.inc.php" method="POST">
				YOUR NAME...MUggLE? <input type="text" name="first" autocomplete="off" 	placeholder="Name">
				<br>
				<br>
				WHERE TO SEND YOUR OWL? <input type="text" name="email" autocomplete="off" placeholder="E-Mail">
				<br>
				<br>
				YOUR NUMBER? <input type="text" name="number" autocomplete="off" placeholder="Mobile Number">
				<br>
				<br>
			
				<button type="submit" name="submit" class="btn btn-default btn-lg">ENTER</button>
	
	</form>
	<h2>~ADITYA KHANDARE</h2>
</body>
</html>