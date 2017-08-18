<?php
session_start();

if(!isset($_SESSION['USSR2']))
{
    $_SESSION['USSR2'] =$name ;
	
    header("location:login.php");
    exit();
} 
    ?>