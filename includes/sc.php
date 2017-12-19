<?php

	include_once 'dbh.inc.php';

	echo $_COOKIE['username'];
	$ans = $_COOKIE['username'];
	$sc = $_COOKIE['score'];
$sql = "UPDATE users SET score= $sc WHERE number= $ans";
	mysqli_query($conn, $sql);
	

?>