<html>
<head>
	<title>Signup</title>
	<style>	body  {
 
 background-image: url("22.jpg");
 width: 100%;
}
</style>
</head>
<body>
<form method="POST" action="../controllers/regcheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">
  	 	<table border="1" width="100%">
	 <tr height="100px">
		<td colspan="2">    
		<Center> 
		<span style="font-size:40px;color:green"><b>E</b></span><span style="font-size:25px">asy Travels</span>
		</Center> 
<Center>
			<a href="login.php"> LogIn   </a>
</Center> 
</td>
</tr>
 <tr>
		   <td colspan="2">
		   <fieldset>
			<center>
		   <table border="1" style="width:50%">
		   <tr> 
	  <td colspan="3"><center><h2>Registration</h2></center></td>
	   
   </tr>
    <tr>
		   <td >id</td>
	   <td><input type="text" name="id" value="" /> </td>
</tr>
   <tr>
		   <td >User Name</td><td><input type="text" name="username" value="" /> </td></tr>
	<tr>
		   <td >Password</td><td><input type="password" name="password" value="" /> </td>
		   </tr>
		   <tr>
			 <td>Email</td><td><input type="email" name="email" value="" /> </td>
		   </tr>
			 <td>Gender</td>
			 <td><input type="radio" name="gender" value="Male"> Male 
			   <input type="radio" name="gender" value="Female"> Female 
			   <input type="radio" name="gender" value="Other"> Other</td>
			 </tr>
			 <tr>
			 <td>Date of Birth</td>
			 <td><input type="date" name="dob" value="" /></td>
			 <tr>
		   <td >Address</td>
	   <td><input type="text" name="address" value="" /> </td>
</tr>
<tr>
		   <td >Mobile</td>
	   <td><input type="text" name="mobile" value="" /> </td>
</tr>
			 <tr>
			   <td height="20px"colspan="3"></td>

			 </tr>
			 <tr>
			   <td height="20px"colspan="3">
				   <input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Clear">
			   </td>
			 </tr>
		 </table>
	</form>
</body>
</html>
<script>
function validate() {
   
   if( document.myForm.id.value == "" ) {
	  alert( "**Please provide an User ID for our new Accountant** " );
	  document.myForm.id.focus() ;
	  return false;
   }
   if( document.myForm.username.value == "" ) {
	  alert( "**Please provide an username for our new Accountant** " );
	  document.myForm.username.focus() ;
	  return false;
   }
   if( document.myForm.password.value == "" ) {
	  alert( "**Paaword No is Required**" );
	  document.myForm.password.focus() ;
	  return false;
   }
   return( true );
}
</script>