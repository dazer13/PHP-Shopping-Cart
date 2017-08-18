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
	<?php 
		include("config/config.php");
		$id=$_GET['id'];
		$sql="SELECT * FROM product WHERE proID=$id";
		$run=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($run)){
		?>
	<div id="content">
	    <h2 align="center" class="main-product-header"><?php echo $row['proname'];?></h2>
		<p align="cenetr" class="underline"></p>
		
		
	  <div class="main-product">
	   <div align="center" id="product-left" >
	         <img class="product-img" src="<?php echo $row['imagepath'];?>" alt="<?php echo $row['imageName'];?>" width="300px"  height="230px"/>
	   </div>
	  
	    <div  id="product-right" >
	      <p align="left" class="about-p"> 
		      <?php echo $row['prodes'];?>
            </p><br>
			  <p class="product-price"><em><?php echo $row['proname'];?> </em> <br> NZ$<?php echo $row['proprice'];?></p><br>
			  <input type="number" name="quantity" placeholder="Enter the Quantity here"/><br><br>
          <input type="button" value="Buy Now" name="buy" class="form-submit"/>
	    </div>
	 </div>
		<?php }?>
	       		
	</div>
	
	
	<?php include("footer.html");?>
	

  </div>


</body>
</html>