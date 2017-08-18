
<?php   
session_start(); //to ensure you are using same session
session_unset();
	echo"<script type='text/javascript'> alert('Successfully Logout from the System!');
		window.location='http://localhost/xtream1/index.php';</script>";//to redirect back to "index.php" after logging out
exit();
?>
