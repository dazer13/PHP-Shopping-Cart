<?php	
session_start();
	include('config/config.php');
	$name= $_POST['user'];
	$password= $_POST['pass'];
	$sql="SELECT * FROM register WHERE fname='$name' AND password='$password'";
	$run= mysqli_query($mysqli,$sql);
	
	if($run) {
		if(mysqli_num_rows($run) == 1) {
			header("location:http://localhost/xtream1/category.php");
			$_SESSION['USSR'] =$name ;
			exit();
		}else {
			//Login failed
			//$errmsg_arr = 'Please check your username and password.';
			//$_SESSION['USSR'] = $errmsg_arr;
			session_write_close();
			echo"<script type='text/javascript'> alert('Unsuccessful! Please try again!');
		  window.location='http://localhost/xtream1/index.php';</script>";
			exit();
		}
	}else {
		die("Query failed");
	}
 ?>