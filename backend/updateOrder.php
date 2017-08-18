<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/validate.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
</head>


<body>

<div class="body_wrapper">
     <div class="center">
	 
        <?php include("header.php");?>
	
             <h2 align="center" class="main-product-header">Update/Delete Customer Orders</h2>
		     <p align="cenetr" class="underline"></p>
           <!--contact form-->
          <div class="ctc-container register-main-container">  
         
		 
		 
                <div align="center-right" id="register-left" >  
	            
				   
				   <?php 
		 
		 $id=$_POST['OrderId'];
		 include("config/config.php");	
$sql="Select * from test2 where id=$id";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query); ?>

	       <form name="form2" action="updateOrder_exe.php?OrderId=<?php echo $id;?>" method="POST" >
	 
	   
	     <!--First Name-->
           <div class="in-field">
		   Product Code<br><br>
                <input type="text"  name="procode" id="first" value="<?php echo $result['product_code'];?>"  placeholder="product Code">
           </div>
           <!--Last Name-->
           <div class="in-field">
		   Product Name <br><br>
                <input type="text"  name="proname"  value="<?php echo $result['product_name'];?>" placeholder="product Name" >
           </div>
		   
		  
		     <!--DOB-->
		   <div class="in-field">
		   Item Price<br><br>
                <input type="text"  name="proprice"  value="<?php echo 'NZ$ ' .$result['product_price'];?>" placeholder="item price" >
           </div>
		   <!--phone-->
          <div class="in-field">
		      Customer Number<br><br>
               <input type="text"  name="custid"  value="<?php echo $result['cust_id'];?>"  placeholder="customer number" >
          </div>
     </div>

        <div class="rgt-col">	
          <!--email-->
          <div class="in-field">
		  Quantity<br><br>
              <input type="text"  name="quantity" value="<?php echo $result['quantity'];?>" placeholder="quantity" >
          </div>
		 
		 <!--email-->
          <div class="in-field">
		  Total Price <br><br>
              <input type="text"  name="tprice" value="<?php echo 'NZ$ ' .$result['total_price'];?>" placeholder="total price" >
          </div>
		  <!--email-->
          <div class="in-field">
		  GST <br><br>
              <input type="text"  name="GST"  value="<?php echo 'NZ$ ' .$result['GST'];?>" placeholder="GST" >
          </div>
		<!--email-->
          <div class="in-field">
		  Grand Total<br><br>
              <input type="text"  name="gtotal" value="<?php echo 'NZ$ ' .$result['grand_total'];?>" placeholder="Grand Total" >
          </div>
		
	
	 <input type="submit" class="form-submit" value="Update Profile" name="update"/>
	 
	</form ><br><br>
	
	<form name="form" action="updateOrder_exe.php?OrderId=<?php echo $id;?>" method="POST">
	<input type="submit" class="form-submit" value="Delete Profile" name="delete"/>
	</form>
	
 </div>
 
 
 
 
 
</div> 
 
 <!-- End of Contact form-->
 
 <?php include("footer.html");?>
  

 </div>
 
 


</body>


</html>

