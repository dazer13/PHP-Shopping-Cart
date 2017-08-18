<?php

if(isset($_POST['del_pro'])){
$productID=$_POST['procode'];

include("config/config.php");
$sql="DELETE from products WHERE product_code= '$productID'";
$query=mysqli_query($conn,$sql);
if($query){
	
echo"<script type='text/javascript'> alert('Successfully Deleted the Product!');
		  window.location='http://localhost/xtream1/backend/index.php';</script>";	
}else{
	echo"<script type='text/javascript'> alert('Unsuccessful! Product not deleted and Please try again!');
	      window.location='http://localhost/xtream1/backend/index.php';
		 </script>".mysqli_error($conn);
}
mysqli_close($conn);
}


?>