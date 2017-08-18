<?php

if(isset( $_POST['update'] ) )
{
 include('config/config.php');
 
 $id=$_GET['OrderId'];
 
// Escape user inputs for security
$procode = mysqli_real_escape_string($conn, $_POST['procode']);
$proname = mysqli_real_escape_string($conn, $_POST['proname']);
$proprice = mysqli_real_escape_string($conn, $_POST['proprice']);
$custid = mysqli_real_escape_string($conn, $_POST['custid']);
$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
$tprice= mysqli_real_escape_string($conn, $_POST['tprice']);
$GST = mysqli_real_escape_string($conn, $_POST['GST']);
$gtotal = mysqli_real_escape_string($conn, $_POST['gtotal']);



 
// attempt insert query execution
$sql = "UPDATE test2 SET product_code='$procode',product_name='$proname',product_price='$proprice',cust_id='$custid',quantity='$quantity',
total_price='$tprice',GST='$GST',grand_total='$gtotal'
WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo"<script type='text/javascript'> alert('Successfully Updated your data!');
		window.location='./index.php';</script>";
	
} else{
     echo"<script type='text/javascript'> alert('Unsuccessful! Please try again!');window.location='./index.php';"
		.mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
}
	


if(isset($_POST['delete'])){
	
	 $id=$_GET['OrderId'];
	 
	 include("config/config.php");
$sql="DELETE from test2 WHERE id=$id";
$query=mysqli_query($conn,$sql);
if($query){
echo"<script type='text/javascript'> alert('Successfully Deleted the Order!');
		  window.location='http://localhost/xtream1/backend/index.php';</script>";	
}else{
	echo"<script type='text/javascript'> alert('Unsuccessful! Please try again!');
	      
		 </script>".mysqli_error($conn);
}
mysqli_close($conn);
}
	
	
	
	




?>