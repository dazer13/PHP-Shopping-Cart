<?php
include_once("config/config.php");


//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
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
</head>
<body id="load">
<div class="body_wrapper">
  <div class="center">
  
  
  <?php include("header.php");?>
 
  <div id="content">

      <?php include("aside.php");?>



<!-- View Cart Box End -->


<!-- Products List Start -->
<?php
$id=$_GET['id'];
$results = $mysqli->query("SELECT product_code, product_name, product_desc, product_img_name, price FROM products WHERE catID=$id ORDER BY id ASC");
if($results){ 
$products_item = '<div id="middle-content2"> <h1 align="center">Products </h1>';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
	
	<form method="post" action="cart_update.php">
	<div class="related-image" style='min-height:520px;'><h3 align="center" style="line-height:140%;">{$obj->product_name}</h3><br><br>
	<img src="backend/tmp/images/{$obj->product_img_name}" width="130px" heigth="150px" class="about-img"><br><br>
	<p class="about-p">{$obj->product_desc}</p><br>
	<p class="product-price">
	Price {$currency}{$obj->price} 
	</p><br><br>

		<span align="center">Quantity</span><br>
		<input type="number" name="product_qty" value="1" min="1" />
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	
	<input type="hidden" name="return_url" value="{$current_url}" /><br><br>
	<button type="submit" class="form-submit">Add to Cart</button>
	</div>
	</form>

EOT;
}
$products_item .= '</div>';
echo $products_item;
}
?>    
<!-- Products List End -->
</div>
	<?php include("footer.html");?>
</div>
</div>
</body>
</html>
