<?php
if(isset( $_POST['submit'] ) )
{
 include('config/config.php');
 
 
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
$sql = "INSERT INTO register (fname,mname,lname,gender,phone,mobile,email,password,st_num,st_name,city,country,zip,hear,interest) VALUES
 ('$first', '$middle', '$last', '$gender','$phone','$mobile','$email','$password2','$street','$sname','$city','$country','$zip','$hear','$interest')";
if(mysqli_query($mysqli, $sql)){
    echo"<script type='text/javascript'> alert('Successfully added your data!');
		window.location='./index.php';</script>";
	
} else{
     echo"<script type='text/javascript'> alert('Unsuccessful! Please try again!');
		window.location='./index.php';</script>". mysqli_error($mysqli);
}
 
// close connection
mysqli_close($mysqli);
}
?>