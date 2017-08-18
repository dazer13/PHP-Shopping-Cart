<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />   
</head>
<body id="load">


<div class="body_wrapper">
  <div class="center">
  
   <?php include("header.php");?>
	<!-- main product row-->
	<div id="content">
	  
	  

                
		 <?php include("aside.php");?>
	  
	 <div id="middle-content2">  
	 <h2 align="center" class="main-product-header">Categories</h2>
		<p align="cenetr" class="underline"></p>
	 <?php
	   include('config/config.php');
		    $sql="select * from category";
		        $run= mysqli_query($mysqli,$sql);
		            while($row=mysqli_fetch_assoc($run)){
						
					?>
	      <div align="center" class="related-image">
		      <img src="<?php echo $row['imagepath'];?>" alt="related-img1" class="about-img" width="210px" height="180px"/><br><br>
			  <p class="product-price"><em>Category Name</em><br> <?php echo $row['catName'];?></p><br><br>
			   <input type="button" name="buy" value="See All Products" class="form-submit" onclick="window.location.href='product.php?id=<?php echo $row['catID'];?>';"/>
			   
		 </div> 
		 <?php
					}
					?>
	  </div>
		  
		  
		 
	   
      		
	</div>
	
	
	<?php include("footer.html");?>
	

  </div>


</body>
</html>