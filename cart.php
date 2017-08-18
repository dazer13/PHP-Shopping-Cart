<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>About Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />

        
</head>
<body id="load">


<div class="body_wrapper">
  <div class="center">
    
		<!-- Header section-->
   <?php include("header.php");?>
   
   <h1 align="center">Your Order Details</h1>
   <div class="container" style="margin:50px auto;">
	<table class="table">
  <thead>
    <tr class="bg-primary">
      <th>List No</th>
      <th>Product ID</th>
      <th>Product  Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
	  <td><a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
	  <td><a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
	<tr>
      
      <td>Total Amount</td>
	  <td>NZ$ 60</td>
    </tr>
  </tbody>
</table>
	
</div>	
	<!-- Footer Section-->
	
	<?php include("footer.html");?>
	

  </div>


</body>
</html>