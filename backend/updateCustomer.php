<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/validate.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto+Condensed" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
</head>


<body>

<div class="body_wrapper">
     <div class="center">
	 
        <?php include("header.php");?>
	
             <h2 align="center" class="main-product-header">Update Profile Form</h2>
		     <p align="cenetr" class="underline"></p>
           <!--contact form-->
          <div class="ctc-container register-main-container">  
         
		 
		 
                <div align="center-right" id="register-left" >  
	               <p id="error">Fill All the fields to Update the Profile!</p>
				   
				   <?php 
		 
		 $id=$_POST['CustID'];
		 include("config/config.php");	
$sql="Select * from register where register_Id=$id";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query); ?>

	       <form name="form2" action="update_exe.php?profileId=<?php echo $id;?>" method="POST" onSubmit="return validate()">
	 
	     <!--Title-->
           <p class="gender-lable">Title</p><br><br><select id="Title" class="select" name="Title">
           <option></option>
           <option>Mr</option>
           <option>Mrs</option>
           <option>Miss</option>
           </select><br><br>
	 
	     <!--First Name-->
           <div class="in-field">
                <input type="text"  name="first" id="first" value="<?php echo $result['fname'];?>" >
           </div>
           <!--Last Name-->
           <div class="in-field">
                <input type="text"  name="last" id="last" value="<?php echo $result['lname'];?>" placeholder="Last Name" >
           </div>
		   
		   <!--Gender-->
           <p class="gender-lable">Select your Gender</p><br><br><select class="select" id="gender" name="gender">
           <option value="<?php echo $result['gender'];?>"><?php echo $result['gender'];?></option>
		   <option>Female</option>
          
           </select><br><br>
		   
		     <!--DOB-->
		   <div class="in-field">
                <input type="text"  name="DOB" id="DOB" placeholder="Date of Birth" >
           </div>
		   <!--phone-->
          <div class="in-field">
               <input type="text"  name="phone" id="phone" value="<?php echo $result['phone'];?>"  placeholder="Phone number" >
          </div>
          <!--email-->
          <div class="in-field">
              <input type="text"  name="email" id="email" value="<?php echo $result['email'];?>" placeholder="Email Address" >
          </div>
		  <!-- password-->
          <div class="in-field">
              <input type="password"  name="password" id="password" value="<?php echo $result['password'];?>"  placeholder="Password" >
         </div>
      </div>
 
  <div class="rgt-col">  
  
  <!--Confirm Password-->
  <div class="in-field">
     <input type="password"  name="password2" id="cpassword"  placeholder="Confirm Password" >
  </div>
  
  <!-- Street Number-->
	<div class="in-field">
    <input type="text"  name="street" id="street" value="<?php echo $result['st_num'];?>" placeholder="Street Number" >
  </div>
  
  <!--Street Name-->
  <div class="in-field">
    <input type="text"  name="sname" id="sname" value="<?php echo $result['st_name'];?>" placeholder="Street Name" >
  </div>
  <!--City--> 
  <div class="in-field">
    <input type="text"  name="city" id="city" value="<?php echo $result['city'];?>" placeholder="City" >
  </div>
  <!--Country-->
  <div class="in-field">
    <input type="text"  name="country" id="country" value="<?php echo $result['country'];?>"  placeholder="Country" >
  </div>
  
  <!-- Zip code-->
  <div class=" in-field">
    <input type="text"  name="zip" id="zip" value="<?php echo $result['zip'];?>"  placeholder="Zip Code" >
  </div>
  
  <!-- How did you hear-->
    <p class="gender-lable">How did you hear about us?</p><br><br><select id="hear" class="select" name="hear">
           <option value="<?php echo $result['here'];?>"><?php echo $result['hear'];?></option>
           <option>News paper</option>
           <option>Social Network</option>
           <option>Our website</option>
           </select><br><br> 
		   
		   
		   <p class="gender-lable">Are you interested in receiving specials from us in future?</p><br><br>
		   <select id="interest" class="select" name="interest">
           <option value="<?php echo $result['st_num'];?>"><?php echo $result['st_num'];?></option>
           <option>Yes</option>
           <option>No</option>
           </select><br><br> 
	
	 <input type="submit" class="form-submit" value="Update Profile" name="update"/>
	 
	</form ><br><br>
	
	<form name="form" action="update_exe.php?profileId=<?php echo $id;?>" method="POST">
	<input type="submit" class="form-submit" value="Delete Profile" name="delete"/>
	</form>
	
 </div>
 
 
 
 
 
</div> 
 
 <!-- End of Contact form-->
 
 <?php include("footer.html");?>
  

 </div>
 
 


</body>


</html>

