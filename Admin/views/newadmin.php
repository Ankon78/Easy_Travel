<?php 

	require('header.php');
	
?>
<html>
<head>	
	<title>New Admin Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<script type = "text/javascript">
   
      // Form validation code .
      function validate() {
      
         if( document.myForm.adminusername.value == "" ) {
            alert( "**Please provide an UNIQUE ID for our new Admin** " );
            document.myForm.adminusername.focus() ;
            return false;
         }
		 if( document.myForm.adminpass.value == "" || isNaN( document.myForm.adminpass.value ) ||
            document.myForm.adminpass.value.length < 8 ) {
            
            alert( "Please provide Longer Password *More Than 8 Number*" );
            document.myForm.adminpass.focus() ;
            return false;
         }
		 if( document.myForm.PhoneNo.value == "" ) {
            alert( "**Phone No is Required**" );
            document.myForm.PhoneNo.focus() ;
            return false;
         }
         if( document.myForm.Email.value == "" ) {
            alert( "Please provide Email Id" );
            document.myForm.Email.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
	
 
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
/* 
.section-padding {
	padding: 3px 0;
}
.owl-dots {
	text-align: center;
	margin-top: 4px;
}
.owl-dot {
	display: inline-block;
	height: 5px !important;
	width: 5px !important;
	background-color: #444 !important;
	opacity: 0.8;
	border-radius: 5%;
	margin: 0 5px;
}
.owl-dot.active {
	background-color: black !important;
} */
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
<img src="../Photos/3.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="newadmin.php"> Add New Admin </a>
	</td>
</tr>
</table>
<script src="../js/newadmin.js"></script>
<form method="POST" action="../controllers/newadmincheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">

		<table width="50%">

			<tr height=100>
				<td colspan="3" align="center"><h1 class="font-effect-neon SBoyyy">Admin Registration</h1>
				<img src="loder.gif" id="loaderIcon" style="display:none"/></td>

			</tr>

			<tr height=50>
			<div class="container">
	<div class="row">
	<div id="frmCheckUsername">
				<td class="SBoyyy" width="200px">Admin Unique ID</td>
				<td width="300px">
			<input class="name" placeholder="Admin Unique ID"  type="text" name="adminusername"  value="" id="adminusername" class="demoInputBox" onBlur="checkAvailability()"><span id="user-availability-status"></span>
</div>

	</div>
</div>
					
				</td>
			
			</tr>
			<tr height=50>
				<td class="SBoyyy">Admin Password </td>
				<td><input class="name" placeholder="Admin Password" type="password" name="adminpass" value=""></td>
				
			</tr>
			<tr height=50>
				<td class="SBoyyy">Address</td>
				<td><input class="name" placeholder="Address" type="text" name="Address" value=""></td>
				
			</tr>
			<tr height=50>
				<td class="SBoyyy">Phone No</td>
				<td><input  class="name" placeholder="Phone No" type="text" name="PhoneNo" value=""></td>
				
			</tr>
			<tr height=50>
				<td class="SBoyyy">Email</td>
				<td><input class="name" placeholder="Email" type="text" name="Email" value=""></td>
				
			</tr>
			<tr height=50>
				<td class="SBoyyy">Other Info</td>
				<td><input class="name" type="text" name="OtherInfo" value="" placeholder="Other Info"></td>
				
			</tr>
			
			
	
			<tr height=50>
				<td colspan="3" align="middle">
					<input class="submit" type="submit" name="submit" value="Submit">
				<input class="submit" type="reset" name="reset" value="Reset"></td>
				
			</tr>
		</table>
		
	</form>
</center>
<!-- check user name already exist or not -->
<script type="text/javascript">
function checkAvailability(){
	$("#loaderIcon").show();
	
	$.ajax({
		type:"POST",
		url:"../models/adminlist.php",
		cache:false,
		data:{
			type:1,
			adminusername:$("#adminusername").val(),
		},
		success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide(1000);
		}
	});
}
</script>

	
<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
</body>
</html>
