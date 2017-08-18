<?php
if(isset( $_POST['update'] ) )
{
 include('config/config.php');
 
 $id=$_GET['profileId'];
// Escape user inputs for security
$first = mysqli_real_escape_string($mysqli, $_POST['first']);
$middle= mysqli_real_escape_string($mysqli, $_POST['middle']);
$last= mysqli_real_escape_string($mysqli, $_POST['last']);
$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
$mobile= mysqli_real_escape_string($mysqli, $_POST['mobile']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password2 = mysqli_real_escape_string($mysqli, $_POST['password2']);
$street = mysqli_real_escape_string($mysqli, $_POST['street']);
$sname = mysqli_real_escape_string($mysqli, $_POST['sname']);
$city = mysqli_real_escape_string($mysqli, $_POST['city']);
$country = mysqli_real_escape_string($mysqli, $_POST['country']);
$zip = mysqli_real_escape_string($mysqli, $_POST['zip']);
$hear = mysqli_real_escape_string($mysqli, $_POST['hear']);
$interest = mysqli_real_escape_string($mysqli, $_POST['interest']);


 
// attempt insert query execution
$sql = "UPDATE register SET fname='$first',mname='$middle',lname='$last',gender='$gender',phone='$phone',email='$email',
password='$password2',st_num='$street',st_name='$sname',city='$city',country='$country',zip='$zip',hear='$hear',interest='$interest' 
WHERE register_Id=$id";

if(mysqli_query($mysqli, $sql)){
    echo"<script type='text/javascript'> alert('Successfully Updated your data!');
		window.location='./index.php';</script>";
	
} else{
     echo"<script type='text/javascript'> alert('Unsuccessful! Please try again!');window.location='./index.php';"
		.mysqli_error($mysqli);
}
 
// close connection
mysqli_close($mysqli);
}
	


if(isset($_POST['delete'])){
	
	 $id=$_GET['profileId'];
	 
	 include("config/config.php");
$sql="DELETE from register WHERE register_Id=$id";
$query=mysqli_query($mysqli,$sql);
if($query){
	session_start(); //to ensure you are using same session
session_unset();
echo"<script type='text/javascript'> alert('Successfully Deleted the Profile!');
		  window.location='http://localhost/xtream1/index.php';</script>";	
}else{
	echo"<script type='text/javascript'> alert('Unsuccessful! Please try again!');
	      
		 </script>".mysqli_error($mysqli);
}
mysqli_close($mysqli);
}
	
	
	
	




?>