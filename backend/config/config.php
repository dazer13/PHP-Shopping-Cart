<?php
	$server='localhost';
	$username='root';
	$password='';
	$database='xtream';
	
	$conn=mysqli_connect($server,$username,$password,$database) or die('can not connect');
	mysqli_select_db($conn,"xtream");

	
 ?>