
	<?php

$currency = 'NZ$ '; //Currency Character or code

$db_username = 'root';
$db_password = '';
$db_name = 'xtream';
$db_host = 'localhost';

$delivery_cost      = 3.00; //shipping cost
$gst           = array( //List your Taxes percent here.
                            'GST' => 0.15
                            );						
//connect to MySql						
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>
 