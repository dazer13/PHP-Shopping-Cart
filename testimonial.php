<?php

include_once("config/config.php");
?>
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
<style>

/*Testimonial box and font style and colours*/
.testimonial {
	    margin-top:30px;
        padding: 20px 25px;
        letter-spacing: 0.1em;
        background-color: #333333; /*Change colour here and in .arrow-down*/
        float: left;
        font-family: 'Open Sans', sans-serif;
        color: white;
        font-size: 15px;
		line-height:140%;

/*Uncomment to add round corners*/
/*      -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border-radius: 8px; */
}
/*Author section wrapper*/
.author-wrapper {
        width: 100%;
        margin-bottom: 20px;
        float: left;
}
/*This creates the arrow with no need for an image, thanks to css-tricks.com*/
.arrow {
        float: left;
        margin-left: 25px;
        width: 0; 
        height: 0; 
        border-top: 30px solid #333333; /*Change colour here to match .testimonial*/
        border-left: 30px solid transparent;
        border-right: 30px solid transparent; /*Make this 30px to create a triangle*/
}
/*Author Name*/
.testimonial-name {
        float: left;
        margin: 0 8px;
        color: #1e4673;
        padding-top: 5px;
        font-family:  'Open Sans', sans-serif;
        font-size: 18px;
    
}
/*Author Job Title*/
.testimonial-name span {
    color: #53646d;
        font-weight: normal;
}
</style>
</head>
<body id="load">
<div class="body_wrapper">
  <div class="center">
  
  
  <?php include("header.php");?>
  <div id="content">
  
  <h2 align="center">Testimonials</em></h2>
  
  <?php 
  $sql="SELECT * FROM comment";
  $query=mysqli_query($mysqli,$sql);
    while($result=mysqli_fetch_array($query)){
  
  ?>
  <div class="testimonial">
<?php echo "'".$result['comment']."'";?>
</div>
<div class="author-wrapper">
<div class="arrow"></div>
<div class="testimonial-name"><?php echo $result['cust_Name'];?></div></div>
  <?php
	}
	?>
</div>
	<?php include("footer.html");?>
</div>
</div>
</body>
</html>
