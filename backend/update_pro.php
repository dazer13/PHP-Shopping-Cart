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
  
  <div id="content">
  <!-- left side content-->
   <div id="admin-left">
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
		
	<input type='submit' name='add' value='add' class="btn btn-primary" >
</form>
	  
	  </div>
  
  <!--middle content-->
    <div id="admin-middle">
	
   <select name="search_price" size="1">
      <?php
    include("config/config.php");
	$sql='select * from products';
	$run=mysqli_query($conn,$sql); 
	
	while($result=mysqli_fetch_assoc($run)){
    ?>
        <option value=" <?php echo $result['id'];?> "> <?php echo $result['product_name'];?> </option>
              
        <?php  
	}?>		
	  </select>
	  
	 </div>

 <!--Right Side-->	 
	  <div id="adimin-right">
	  </div>
	  
	  </div>
</div>
</div>

</body>



</html>