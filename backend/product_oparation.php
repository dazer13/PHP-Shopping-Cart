
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
	
             <h2 align="center" class="main-product-header">Update Products</h2>
		     <p align="cenetr" class="underline"></p>
           <!--contact form-->
          <div class="ctc-container register-main-container">  
         
		 
		 
                <div align="center-right" id="register-left" >  
 
 <?php
 
	
	  $proId=$_POST['productID'];
	   include("config/config.php");
	  $sql2='select * from products where id='.$proId ;
	  $run2=mysqli_query($conn,$sql2);
	  
          $result2=mysqli_fetch_assoc($run2);
	  ?>
	  <form action="del_update_product.php?proId=<?php echo $proId;?>" method="post">
	  Category ID<br><br>
      <input type='text' name='catId' value="<?php echo $result2['catID'];?>"><br><br>
  
      Product Code<br><br>
	  <input type='text' name='procode'  value="<?php echo $result2['product_code'];?>"><br><br>
      Product Name<br><br>
     <input type='text' name='proname'  value="<?php echo $result2['product_name'];?>"><br><br><br>

       Product Description<br><br>
	    <textarea name='prodes' cols='20' rows='15'> <?php echo $result2['product_desc'];?></textarea><br><br><br>
		<img src="tmp/images/<?php echo $result2['product_img_name'];?>" width="140px" height="120px"/><br><br>
	    Price NZ$<br><br>
	    <input type="text" name='proprice' value="<?php echo $result2['price'];?>" /><br><br>
		
		<input type="submit" value="Delete product" class="form-submit" name="del_pro" />
		<input type="submit" value="Update product" class="form-submit" name="update_pro" />
		<input type="hidden" value="<?php echo $proId;?>" class="form-submit" name="proId" />
		<input type="hidden" value="<?php echo $result2['product_img_name'];?>" class="form-submit" name="image" />
		
	 </form>

 
  </div>
 
 
 
 
 
</div> 
 
 <!-- End of Contact form-->
 
 <?php include("footer.html");?>
  

 </div>
 
 


</body>


</html>

