<?php 
// call at wrong input and null input line
	$error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "invalid username/password. Please Input User Name Password Correctly";
		}
	}
	$null = "";
	
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'null'){
			$error = "Please Input First";
		}
	}

?>

<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">

	<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<style>
      
		.SBoyyy{
        font-family: "Audiowide", sans-serif;
        /*font-size: 100%;*/
        font-style: italic;
        font-weight: bolder;
        color: black;
		
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
color:white ;
font-size: 15px;
background: transparent;

}

.name:hover {color: 9932CC;}
.submit:hover {color: 9932CC;}
.submit:hover {background: white}

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
}

		</style>
		<style> 
body {
  background-image: url("../photos/22.png");

  background-size: 100%;
}
</style>
</head>
<body>

	<form  method="POST" action="../controllers/loginCheck.php">

		<center>
		<table    width="50%">
		
		<tr height=100>
			
				<td colspan="3" align="center">
			
                    <!-- <legend>Log In Admin</legend> -->
					<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>
					
					<h1 class="SBoyyy">Log In </h1>
					<h3 class="SBoyyy" style="color:green">Admin </h3></br>
		
			</td>
			</tr>
			<tr>
				<td><p class="SBoyyy">Enter Your User Name :</td>
				<td><input class="name" type="text" name="username" placeholder="username" value=""></td>
			</tr>
			<tr>
				<td><p class="SBoyyy">Enter Your Password :</td>
				<td><input class="name" type="password" name="password"  placeholder="password" value=""></td>
			
			<tr>
				<td colspan="3" align="center">
				<input class="submit"  type="submit" name="submit" value="Submit">
				<input  class="submit" type="reset" name="reset" value="Clear"><a href="Forgot Password.php"></td>
				<h6 class="SBoyyy" style="color: red"><?=$error?></td>
				<!-- error code at 1st  -->
			</tr>
			<tr>
				<td colspan="3" align="center">  
					<a class="SBoyyy" style="font-size:15px;color:white" href="../../start.php">BACK</a>
			</tr>
		
		
			<div class="brand-carousel owl-carousel">
		<div class="box"><img alt="" src="../photos/logo1.jpg"></div>
		<div class="box"><img alt="" src="../photos/1.jpg"></div>
		<div class="box"><img alt="" src="../photos/2.jpg"></div>
		<div class="box"><img alt="" src="../photos/3.jpg"></div>
		<div class="box"><img alt="" src="../photos/4.jpg"></div>
		<div class="box"><img alt="" src="../photos/5.jpg"></div>
		<div class="box"><img alt="" src="../photos/6.jpg"></div>
	
	</div>
	<!-- 1st row picture add design -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
	</script> 
	<script>
	       $('.brand-carousel').owlCarousel({
	           loop:true,
	           margin:10,
	           autoplay:true,
	           responsive:{
	               0:{
	                   items:1
	               },
	               600:{
	                   items:3
	               },
	               1000:{
	                   items:5
	               }
	           }
	       })
	</script>
			<tr> <td class="SBoyyy" style="font-size:10px;" colspan="3"align="down"><Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> </td></tr>
		</table>
	</form>
</body>
</html>