function validate()
{
 var error="";
 var numeric=/^[0-9]+$/;
 var alpha=/^[a-zA-Z]+$/;
 var emailvalid= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 var passwordvalid=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
 var Dob_Validator=/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;
 var fname = document.getElementById( "first" ); 
 var title = document.getElementById( "Title" );
 var lname = document.getElementById( "last" );
 var gender = document.getElementById( "gender" );
 var DOB = document.getElementById( "DOB" );
 var phone = document.getElementById( "phone" );
 var email = document.getElementById( "email" );
 var street = document.getElementById( "street" );
 var streetname = document.getElementById( "sname" );
 var city = document.getElementById( "city" );
 var country = document.getElementById( "country" );
 var zip = document.getElementById( "zip" );
 var hear = document.getElementById( "hear" );
 var interest = document.getElementById( "interest" );
 var password = document.getElementById( "password" );
 var cpassword = document.getElementById( "cpassword" );
 
 

 if( title.value == "" )
 {
  error = " Please select your Title ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 else if( fname.value == "" )
 {
  error = " Please enter your First Name ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }

 else if( lname.value == ""  )
 {
  error = " Please enter your last name . ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 else if( !fname.value.match(alpha) || !lname.value.match(alpha)  )
 {
  error = " Your name fields shouldn't include numbers! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
  else if(gender.value==0 )
 {
  error = " Select your gender! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 
 else if(DOB.value=="" )
 {
  error = " Enter your Birth Day ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 
 else if(!DOB.value.match(Dob_Validator))
 {
  error = " The Birthday format should be DD/MM/YYYY ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }

 
 else if( phone.value=="" )
 {
  error = " Please enter your phone number! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 
 else if( !phone.value.match(numeric) )
 {
  error = " Only numbers are allowed to type in this field! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
  else if( email.value=="" )
 {
  error = " Please enter your  email Address! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 else if( !email.value.match(emailvalid))
 {
  error = " Your email address is not valid and Please check again! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 } 
 
 else if( !password.value.match(passwordvalid))
 {
  error = " Password should contain at least 8 characters including letters,numbers and special charcters! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 else if(cpassword.value=="")
 {
  error = "Re type the password ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 
 else if(password.value!=cpassword.value)
 {
  error = "Your passwords are not matched, Please try again! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 
 else if( !street.value.match(numeric))
 {
  error = " Street number should include only numbers! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 else if( !streetname.value.match(alpha))
 {
  error = " Street name should be include only letters! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
  else if( !city.value.match(alpha))
 {
  error = " City name should be include only letters! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
  else if( !country.value.match(alpha))
 {
  error = " Country name should be include only letters! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
  else if( !zip.value.match(numeric))
 {
  error = " Zip code should be ia number ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
 else if(hear.value==0 )
 {
  error = " Please tell us how you hear about us! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }
else if(interest.value==0 )
 {
  error = " Confirm the subscription! ";
  document.getElementById( "error" ).innerHTML = error;
  return false;
 }


 else
 {
	
  return true; 
  
 }
}


