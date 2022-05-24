<?php 

	require('header.php');
	
?>

<html>
<head>	
	<title>Home Page</title>


	<script type = "text/javascript">
   
   // Form validation code .
   function validate() {
   
	  if( document.myForm.AccountantNo.value == "" ) {
		 alert( "**Please provide an Accountant ID for our new Accountant** " );
		 document.myForm.AccountantNo.focus() ;
		 return false;
	  }
	  if( document.myForm.name.value == "" ) {
		 alert( "**Please provide an Name for our new Accountant** " );
		 document.myForm.name.focus() ;
		 return false;
	  }
	  if( document.myForm.password.value == "" || isNaN( document.myForm.password.value ) ||
		 document.myForm.password.value.length < 8 ) {
		 
		 alert( "Please provide Longer Password *More Than 8 Character*" );
		 document.myForm.password.focus() ;
		 return false;
	  }
	  if( document.myForm.Phone.value == "" ) {
		 alert( "**Phone No is Required**" );
		 document.myForm.Phone.focus() ;
		 return false;
	  }
	  return( true );
   }
//-->
</script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<style>
         *{
    background-color: #D8BFD8;
        }
		.SBoyyy{
        font-family: "Audiowide", sans-serif;
        /*font-size: 100%;*/
        font-style: italic;
        font-weight: bolder;
        color: rgb(20, 11, 29);
    }
	.submit{
		/* position: absolute; */
		top: 55%;
		left: 55%;
		width: 25%;
		height: 25px;
		border: 2px solid;
		background: #9932CC;
        border-radius: 25px;
        font-size: 15px;
        color: whitesmoke;
        font-weight: 700;
        cursor: pointer;
        outline: none;
		
	}
	
	.name{

/* position: absolute; */
top: 15%;
left: 50%;
width: 50%;
height: 28px;
border: none;
border-bottom: 3px solid ;
color:#9932CC; 
font-size: 15px;
background: transparent;

}

.name:hover {color: red;}
.submit:hover {color: 9932CC;}
.submit:hover {background: white}
	
		</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
	
<div class="container box">  
   <div class="form-group">
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>

<center>
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin.</h1> 

	<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |

	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<td>
<center>
<img src="../Photos/4.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="newaccountant.php"> Add New Accountant </a>
	</td>
</tr>

<script src="../js/newadmin.js"></script>
<form method="POST" action="../controllers/newaccountantcheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">

		<table  width="50%">

			<tr height=100>
				<td colspan="3" align="center"><h1 class="font-effect-neon SBoyyy">Accountant Registration</h1>
				<img src="loder.gif" id="loaderIcon" style="display:none"/></td>
			</tr>

			<tr height=50>
			<div class="container">
				<div class="row">
				<div id="frmCheckUsername">
				<td  width="200px" class="SBoyyy">Admin Unique ID</td>
				<td width="300px">
			<input  class="name" placeholder="Unique Id" type="text" name="AccountantNo"  value="" id="AccountantNo" class="demoInputBox" onBlur="checkAvailability()"><span id="user-availability-status"></span>
</div>

	</div>
</div>
			<tr>
				<td class="SBoyyy">Name</td>
				<td><input  class="name" placeholder="Name" type="text" name="name" value=""></td>
			</tr>

			<tr>
				<td class="SBoyyy">Password</td>
				<td><input  class="name" placeholder="Password" type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td class="SBoyyy">Phone</td>
				<td><input  class="name" placeholder="Phone No" type="Phone" name="Phone" value=""></td>
			</tr>

			<td class="SBoyyy">Educational Qualification</td>
				<td><input  class="name" placeholder="Qualificaton" type="text" name="education" value=""></td>
			</tr>

			<tr>
				<td class="SBoyyy">Gender</td>
				<td><input    type="radio" name="gender" value="Male">Male
						<input   type="radio" name="gender" value="Female">Female
						<input   type="radio" name="gender" value="others">Other</td>
			</tr>
			<tr>
				<td class="SBoyyy">Date of Birth</td>
				<td><input  class="name" type="date" name="date" value=""></td>
			</tr>
			<tr>
				<td class="SBoyyy">Blood Group</td>
				<td><select  class="name" name="bloodGroup">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							
						</select></td>
			</tr>
	
			<tr>
				<td></td>
				<td><input class="submit" type="submit" name="submit" value="Submit">
				    <input class="submit" type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</center>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 



<script type="text/javascript">
function checkAvailability(){
	$("#loaderIcon").show();
	
	$.ajax({
		type:"POST",
		url:"../models/accountant.php",
		cache:false,
		data:{
			type:1,
			AccountantNo:$("#AccountantNo").val(),
		},
		success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide(1000);
		}
	});
}
</script>







</body>
</html>