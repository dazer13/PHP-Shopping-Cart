<?php
   include("log_check.php");
    include("config/config.php");
	$sql='select * from category';
	$run=mysqli_query($conn,$sql);
 ?>

 <!DOCTYPE html>
<html lang="en">
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
  
  <?php include("header.php")?>
  <div id="content" style="margin:10px auto; width:100%;padding:20px; min-height:300px;">
  <!-- left side content-->
  
   <div id="admin-left">
   <h2>Add Products</h2><br><br>
  <form action='execute.php' method='post' enctype="multipart/form-data">
	
      ProNum<br>
      <input type='text' name='pronum'><br><br>
  
      Name<br>
	  <input type='text' name='proname'><br><br>
      Image<br>
     <input type='file' name='proimage'><br><br>

       Description<br>
	    <textarea name='prodes' cols='20' rows='15'></textarea><br><br>
	    Price<br>
	    <input type="text" name='proprice' /><br><br>
	  Category<br>
		<select name='category'>
				<?php
					while($row=mysqli_fetch_array($run)){
						echo ("<option value='$row[catID]'>$row[catName]</option>");
					}
				?>
	<option>select</option>
		</select><br><br>
		
	<input type='submit' name='add' value='add' class="form-submit" >
       </form>
	  
	  </div>
  
  <!--middle content-->
    <div id="admin-middle" >
	<h2>Manage Products</h2><br><br>
	
	<form action="product_oparation.php" method="post">
        Select the product<br><br>
   <select name="productID" size="1" >
      <?php
    include("config/config.php");
	$sql='select * from products';
	$run=mysqli_query($conn,$sql); 
	
	while($result=mysqli_fetch_assoc($run)){
    ?>
        <option value=" <?php echo $result['id'];?> "> <?php echo $result['product_code'];?> </option><br/><br/>
              
        <?php  
	}?>		
	  </select><br/><br/>
	  <input type="submit" value="Get Values" class="form-submit" name="get_pro-btn"/>
	  
	 
	 </form>
	
	 </div>

 <!--Right Side-->	 
	  <div id="adimin-right">
	  <!-- manage customer section-->
	  <div class="manage">
	  <h2>Manage Customers</h2><br><br>
	  
	 <form action="updateCustomer.php" method="post">
     Select the Customer<br><br>
   <select name="CustID" size="1" >
      <?php
    include("config/config.php");
	$sql='select * from register';
	$run=mysqli_query($conn,$sql); 
	
	while($result=mysqli_fetch_assoc($run)){
    ?>
        <option value=" <?php echo $result['register_Id'];?> "> <?php echo $result['fname'];?> </option><br/><br/>
              
        <?php  
	}?>		
	  </select><br/><br/>
	  <input type="submit" value="Get Customer" class="form-submit" name="Cust"/>
	  <input type="hidden" value="<?php echo $result['register_Id'];?>" class="form-submit" />
	 </form><br><br><br>
	 </div>
	 
	 <!--Manage orders section-->
	 <div class="manage">
	 <h2>Manage Orders</h2><br><br>
	  
	 <form action="updateOrder.php" method="post">
     Select Order<br><br>
   <select name="OrderId" size="1" >
      <?php
    include("config/config.php");
	$sql='select * from test2';
	$run=mysqli_query($conn,$sql); 
	
	while($result=mysqli_fetch_assoc($run)){
    ?>
        <option value=" <?php echo $result['id'];?> "> <?php echo $result['id'];?> </option><br/><br/>
              
        <?php  
	}?>		
	  </select><br/><br/>
	  <input type="submit" value="Get Selected Order" class="form-submit" name="Order"/>
	  <input type="hidden" value="<?php echo $result['id'];?>" class="form-submit" />
	 </form><br><br>
	 
	 <input type="button" class="form-submit" onClick="window.location.href='http://localhost/xtream1/backend/all_Orders.php';" value="Get All Orders"/>
	  </div>
	  </div>
	  </div>
	  <?php include("footer.html")?>
</div>
</div>

</body>



</html>