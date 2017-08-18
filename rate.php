
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rate Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />

        
</head>
<body id="load">


<div class="body_wrapper">
  <div class="center">
  
   <?php include("header.php");?>
	
	<div id="content">
	  <div align="center">
	   <form action="#" method="post">
	   
	   <?php

if(isset( $_POST['feed'] ) )
{
 include('config/config.php');
 
 
// Escape user inputs for security
$user = $_SESSION['USSR'];
echo $user;
$comment= mysqli_real_escape_string($mysqli, $_POST['comment']);



 
// attempt insert query execution
$sql = "INSERT INTO comment (cust_Name,comment) VALUES
 ('$user','$comment')";
if(mysqli_query($mysqli, $sql)){
    echo"<script type='text/javascript'> alert('Successfully added your Comment!');
		window.location='./index.php';</script>";
	
} else{
     echo"<script type='text/javascript'> alert('Unsuccessful! Please try again!');
		window.location='./index.php';</script>". mysqli_error($mysqli);
}
 
// close connection
mysqli_close($mysqli);
}
?>
	      <textarea style="margin: 0px; height: 153px; width: 482px;background-color: #F9F9F9;border: 1px solid #CCC;" name="comment" placeholder="Post your Comment to help us to improve the Customer Satisfaction"></textarea><br><br>
	       <input type="submit" value="Send Feedback" name="feed" class="form-submit"/>
		  
		   
       </form> 
     </div>	 
	</div>
	
	
	<?php include("footer.html");?>
	

  </div>


</body>
</html>