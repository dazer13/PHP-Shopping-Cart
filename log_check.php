<?php
session_start();

if(!isset($_SESSION['USSR']))
{
    $_SESSION['USSR'] =$name ;
	
    header("location:login.php");
    exit();
} 
    ?>