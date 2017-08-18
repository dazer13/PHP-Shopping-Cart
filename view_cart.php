<?php
include_once("config/config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />   
<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />   
</head>
<body id="load">
<div class="body_wrapper">
  <div class="center">
  
  
  <?php include("header.php");?>
  <div id="content">
<h1 align="center">View Cart</h1>
<div class="cart">
<form method="post" action="cart_update.php">
<table width="100%"  cellpadding="6" cellspacing="0"><thead><tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th><th>Remove</th></tr></thead>
  <tbody>
 	<?php
	if(isset($_SESSION['USSR'])){
	echo "<b>Welcome</b>   ".$_SESSION['USSR'];
	
	}else{
		
		echo "Please Log to the System to Checkout!";
	}
	//Array ( [PR01] => Array ( [product_qty] => 6 [product_code] => PR01 [product_name] => Bick [product_price] => 12 ) [PR02] => Array ( [product_qty] => 7 [product_code] => PR02 [product_name] => Camp Tent [product_price] => 35 ) )
	if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
			echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
			echo '<td>'.$product_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
            echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
        }
		
		$grand_total = $total; //grand total including shipping cost
		foreach($gst as $key => $value){ //list and calculate all taxes in array
				$tax_amount     = $total * $value;
				$tax_item[$key] = $tax_amount;
				$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
		}
		
		$list_tax       = '';
		foreach($tax_item as $key => $value){ //List all taxes
			$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
		}
		//$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
	}
    ?>
	
	
    <tr><td colspan="5"><span style="float:right;text-align: right;"><br><?php if(isset($_SESSION["cart_products"])){ echo  $list_tax;} ?><br>Total Amount  <?php if(isset($_SESSION["cart_products"])){ echo ': ' .sprintf("%01.2f", $grand_total);}?></span></td></tr><br><br>
    <tr><td colspan="5"><input type="button" class="form-submit add-more" value="Add More Items" onClick="window.location.href='http://localhost/xtream1/category.php';" /><button type="submit" class="form-submit">Update</button></td></tr>
  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>

<form action="#"  method="POST">


<?php

if(isset($_SESSION['USSR'])){
$user=$_SESSION['USSR'];

$sql2="SELECT register_Id from register WHERE fname='$user'";

$result2=mysqli_query($mysqli,$sql2);
$row=mysqli_fetch_array($result2);

$user_id=$row['register_Id'];
}

if(isset($_REQUEST['ins-cart'])){
	if(isset($_SESSION['USSR'])){
foreach ($_SESSION['cart_products'] as $mdaKey => $mdaData) {
  $product_Num= $mdaData["product_code"];
  $product_Name= $mdaData["product_name"];
  $product_quantity= $mdaData["product_qty"];
  $product_price= $mdaData["product_price"];
  $total_price=$product_price * $product_qty;
  $Gst=$total_price*0.15;
  $grand_total_each=$total_price+$Gst;
	$sql="INSERT INTO test2(product_code,product_name,product_price,cust_id,quantity,total_price,GST,grand_total) 
	VALUES('$product_Num','$product_Name','$product_price','$user_id','$product_quantity','$total_price','$Gst','$grand_total_each')";
	$query=mysqli_query($mysqli,$sql);
	
	if($query)
	{
		unset($_SESSION['cart_products']);
echo"<script type='text/javascript'> alert('Thank You for Buying the Items from Us!');
		window.location='http://localhost/xtream1/order_history.php';</script>";
		
	}else{ echo 'We are having a trouble with proceeding your order checkout';}
}

}else{echo"<script type='text/javascript'> alert('Please log in to the Store to proceed the Checkout!');
		window.location='http://localhost/xtream1/index.php';</script>";}


}

		?>
		


<button type="submit" name="ins-cart" class="form-submit">Checkout</button>

</form>


<form action="#">

<?php
if(isset($_REQUEST['clr_cart'])){
	
unset($_SESSION['cart_products']);
	echo"<script type='text/javascript'> alert('Successfully Clear the cart!!');
		window.location='http://localhost/xtream1/index.php';</script>";
}


?>

<button type="submit" name="clr_cart" class="form-submit">Clear Cart</button>
<input type="button" onclick="window.location='http://localhost/xtream1/order_history.php';" class="form-submit" value="Order history"/>
</form>



</div>
<!-- Products List End -->
</div>
	<?php include("footer.html");?>
</div>
</div>
</body>
</html>
