<?php session_start();?>
<div align="center">

   <?php if(isset($_SESSION['USSR2'])){ ?>
         <p><a type="button" ><span style="text-transform:capitalize;font-weight:bold;font-size:15px;"><?php echo $_SESSION['USSR2']  ?><a href="edit.php" class="edit-prof">&nbsp;&nbsp;Edit Profile</a></a></span><a href="logout.php">&nbsp;(Logout)</a></p>
          <?php }else{ ?>
  <span id="err">Login to your account!</span>
           <?php }?>
  
   </div>
  
   <!-- site header-->
   <div class="header_area" >
      <div class="logo floatleft"><a href="index.php"><img src="images/LogoImg.PNG" alt="" width="130px" height="100px" /></a></div>
	  <!--nav links-->
      <div class="top_menu floatleft">
        <h2 style="padding:20px; "align="center">Xteram Admiministration Page</h2>
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