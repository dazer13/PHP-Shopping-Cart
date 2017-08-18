<?php
 
	include('config/config.php');
	
	
	$procategory= $_POST['category'];
	$pronum= $_POST['pronum'];
	$proname= $_POST['proname'];
	$prodes= $_POST['prodes'];
	$price= $_POST['proprice'];
	
	$file = $_FILES['proimage']['tmp_name'];
	$pimageName=$_FILES['proimage']['name'];
	$pimage=mysqli_real_escape_string($conn,file_get_contents($_FILES["proimage"]["tmp_name"]));
	
	
	if(isset($_POST['add'])){
		$upload_image=mysqli_real_escape_string($conn,$_FILES['proimage']['name']);
		$folder="tmp/images/";
		move_uploaded_file($_FILES["proimage"]["tmp_name"], "$folder".$_FILES["proimage"]["name"]);
		$path= 'backend/'.$folder.$pimageName;
		
		
		
		$sql="insert into products (catID,product_code,product_name,product_desc,product_img_name,price) values
		('$procategory','$pronum','$proname','$prodes','$pimageName','$price')";
		if(!$insert=mysqli_query($conn,$sql)){
		echo"<script type='text/javascript'> alert('Unsuccessful Inserted  and Please try again!');
		 </script>".mysqli_error($conn);
		  
		}else{echo"<script type='text/javascript'> alert('Successfully Inserted the Product!');
		  window.location='http://localhost/xtream1/backend/index.php';</script>";	}
		
		
		
		
	}
	
 ?>