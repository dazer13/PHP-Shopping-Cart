<?php session_start();?>
<div align="center">
<?php 


if(isset($_SESSION['USSR'])){
	$user=$_SESSION['USSR'];
include("config/config.php");
$sql="Select register_Id from register where fname='$user'";
$query=mysqli_query($mysqli,$sql);
$result=mysqli_fetch_array($query);
$id=$result['register_Id'];

}
?>


   <?php if(isset($_SESSION['USSR'])){ ?>
         <p><a type="button" ><span style="text-transform:capitalize;font-weight:bold;font-size:15px;"><?php echo $_SESSION['USSR']  ?>
<a href="edit.php?profileId=<?php echo $id;?>" class="edit-prof">&nbsp;&nbsp;Edit Profile</a></a></span><a href="logout.php">&nbsp;(Logout)</a></p>
          <?php }else{ ?>
          
           <?php }?>
  
    
    <a href="view_cart.php" class="shopping">(<?php if(isset($_SESSION['cart_products'])){echo count($_SESSION['cart_products']). '  items'; }?>)
	<img  src="http://www.freeiconspng.com/uploads/grocery-cart-icon-28.png" width="30px" height="30px" /></a>
   </div>
  
  <!-- site header-->
   <div class="header_area" >
      <div class="logo floatleft"><a href="index.php"><img src="images/LogoImg.PNG" alt="" width="130px" height="100px" /></a></div>
	  <!--nav links-->
      <div class="top_menu floatleft">
        <ul>
          <li><a class="active" style="color:#FFF" href="index.php">Home</a></li>
          <li><a  class="active" style="color:#FFF" href="aboutus.php">About us</a></li>
          <li><a  class="active"  style="color:#FFF" href="category.php">Products</a></li>
          <li><a class="active"  style="color:#FFF" href="contact.php">Contact us</a></li>
		  <?php if(isset($_SESSION['USSR'])){ ?>
		  <li><a class="active"  style="color:#FFF" href="rate.php">Rate us</a></li>
		  <li><a class="active"  style="color:#FFF" href="edit.php?profileId=<?php echo $id;?>">My Profile</a></li>
		   <?php }else{ ?>
          <li><a class="active"  style="color:#FFF" href="Register.php">Register</a></li>
          <li><a class="active"  style="color:#FFF" href="login.php">Login</a></li>
		   <?php }?>
        </ul>
	  </div>
	  
	  <!-- header right section-->
      <div class="social_plus_search floatright">
       <div class="search" id="search2">
          <form action="search1.php" method="post" id="search_form" name="search_form">
            <input type="text" name="search_text" placeholder="Search by Product" id="s" />
            <input type="submit" id="searchform" name="search2" value="search Product" />
            <input type="hidden" value="post" name="post_type" />
		
          </form>
		  </div>

        </div>
    </div>
	
<script type="text/javascript">
function valid()
{
 var err="";
 var name = document.getElementById( "user" ); 
 var password = document.getElementById( "userpass" );

 
 if( name.value == "" )
 {
  err = " Please enter the your valid Username ";
  document.getElementById( "err" ).innerHTML = err;
  return false;
 }
 else if( password.value == "" )
 {
  err= " Please enter your valid Password . ";
  document.getElementById( "err" ).innerHTML = err;
  return false;
 }
 

 else
 {
  return true;
 }
}



function register_load(){

window.location.href = "http://localhost/xtream/Register.php";

}
</script>