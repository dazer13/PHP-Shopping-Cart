<?php
 include("log_check.php");
include_once("config/config.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#history').dataTable();
} );

</script>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />   
</head>
<body id="load">
<div class="body_wrapper">
  <div class="center">
  <?php include("header.php");?>
  <?php 
		include("config/config.php");
		$user=$_SESSION['USSR'];
		$sql="SELECT register_id FROM register WHERE fname='$user'";
		$run=mysqli_query($mysqli,$sql);
		$result=mysqli_fetch_array($run);
		$user_id=$result['register_id'];
		?>
  
  
  <div id="content">
   <h2 align="center">Welcome&nbsp; <em><?php echo $_SESSION['USSR']. ' This Is Your Order History.';?></em></h2>
  <table id="history" class="table table-striped table-bordered table-list" cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
        <thead>
            <tr>
                <th>Product Number</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>GST</th>
                <th>Grand Total</th>
            </tr>
		<?php 
	
		$sql2="SELECT * FROM test2 WHERE cust_id=$user_id";
		$run=mysqli_query($mysqli,$sql2);
		while($result=mysqli_fetch_assoc($run)){
		
		?>
			<tr>
			 <td><?php echo $result['product_code'];?></td>
			 <td><?php echo $result['product_name'];?></td>
			 <td><?php echo ' NZ$ ' .$result['product_price'];?></td>
			 <td><?php echo $result['quantity'];?></td>
			 <td><?php echo ' NZ$ ' .$result['total_price'];?></td>
			 <td><?php echo ' NZ$ ' .$result['GST'];?></td>
			 <td><?php echo ' NZ$ ' .$result['grand_total'];?></td>
			
			</tr>
			<?php
		}
		?>
			
			
        </thead>
</table>
 
  
  <div id="history">
  
  </div>
  
  
</div>
	<?php include("footer.html");?>
</div>
</div>
</body>
</html>
