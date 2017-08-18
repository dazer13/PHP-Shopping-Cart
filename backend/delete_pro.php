<?php

    include("config/config.php");
	$sql='select * from category';
	$run=mysqli_query($conn,$sql);
 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sharp Eye</title>

	
	
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
 <link href="css/Sharpeye.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
 
 
 <body>
 <div class="row container" style="overflow:auto;z-index:1;margin-right:50px;margin:70px auto;">
 


     <div class="panel panel-primary">
      <div class="panel-heading">ADD Catogory</div>
      <div class="panel-body">
	  
	  <form action='execute.php' method='post' enctype="multipart/form-data">
	<table class="table table-striped table-inverse">
  <tbody>
    <tr>
      <td>ProNum</td>
      <td><input type='text' name='pronum'>PR</td>
    </tr>
	
	<tr>
      <td>Name</td>
      <td><input type='text' name='proname'></td>
    </tr>
    <tr>
      
      <td>Image</td>
      <td><input type='file' name='proimage'></td>
    </tr>

	<tr>
	    <td>Description</td>
	    <td><textarea name='prodes' cols='20' rows='15'></textarea></td>
	</tr>
	
	<tr>
	    <td>Price</td>
	    <td><input type="text" name='proprice' /></td>
	</tr>
	
	<tr>
	  <td>Category</td>
			<td>
				<select name='category'>
				<?php
					while($row=mysqli_fetch_array($run)){
						echo ("<option value='$row[catID]'>$row[catName]</option>");
					}
				?>
					<option>select</option>
				</select>
			</td>
	</tr>
	
	<tr> 
	     <td colspan='2'>
				<div align='center'>
					<input type='submit' name='add' value='add' class="btn btn-primary" >
				</div>
			</td>
	</tr>
	
	
  </tbody>
</table>
</form>
	  
	  
	  </div>
    </div>
	
	
	
</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
	<script src="js/function.js"></script>
	<script type="text/javascript" src="js/static.js" ></script>
</body>



</html>