<?php

if(isset($_POST['del_pro'])){
$productID=$_POST['proId'];

include("config/config.php");
$sql="DELETE from products WHERE id= $productID";
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

if(isset($_POST['update_pro'])){
	$productID=$_POST['proId'];
$catid=isset($_POST['catId']);
$procode=isset($_POST['procode']);
$proname=isset($_POST['proname']);
$prodes=isset($_POST['prodes']);
$proprice=isset($_POST['proprice']);
include("config/config.php");
$sql="UPDATE products SET catID='$catid',product_code='$procode',product_name='$proname',product_desc='$prodes',price='$proprice' WHERE id=$productID";
$query=mysqli_query($conn,$sql);
if($query){
	
echo"<script type='text/javascript'> alert('Successfully Updated the Product!');
    
		  </script>";	
}else{
	echo"<script type='text/javascript'> alert('Unsuccessful! Product not Updated and Please try again!');
	    
		 </script>".mysqli_error($conn);
}
mysqli_close($conn);
}



?>