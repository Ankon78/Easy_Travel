<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Easy Travels</title>

	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		header{
			background-image:linear-gradient(rgb(0,0,0,0.5),rgb(0,0,0,0.5)), url(Serviceprovider/views/home.jpg) ;
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		ul{
			float: right;
			list-style-type: none;
			margin-top: 0px;
		}
		ul li{
			display: inline-block;
		}
		ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid #fff;
			transition: 0.6s ease;
		}
		ul li a:hover{
			background-color: whitesmoke;
			color: black;
		}
		.SBoyyy{
            font-family: "Audiowide", sans-serif;
          
		    
		
        font-style: italic;
        font-weight: bolder;
        color: rgb(20, 11, 29);
       }
       .main{
       	max-width: 1200px;
       	margin: auto;
       }
       .title{
       	position: absolute;
       	top: 57%;
       	left: 50%;
       	transform: translate(-50%,-50%);
       }
       .title h1{
       	color: whitesmoke;
       	font-size: 51px ;
       }
       .button{
       		position: absolute;
       	    top: 67%;
          	left: 50%;
       	    transform: translate(-50%,-50%);
       }
       .btn{
       	border: 1px solid #fff;
       	padding: 10px 30px;
       	color: #fff;
       	text-decoration: none;
       	transition: 0.6s ease;
       }
       .btn:hover{
       	    background-color: whitesmoke;
			color: black;

       }

	</style>
</head>
<body>
	<header>
		<div class="main">
			<div><span class="SBoyyy" style="font-size:50px;color:orange;"><b>E</b></span><span class="SBoyyy"style="font-size: 30px; color:rgb(89, 240, 55);">asy Travels </span></div>
			<ul>
				<li><a href="Admin/views/login.php">Admin</a></li>
				<li><a href="#">Accountant</a></li>
				<li><a href="Serviceprovider/views/aboutus.php">About</a></li>
				<li><a href="Serviceprovider/views/phone2.php">Contact</a></li>
			</ul>
			
		</div>
		<div class="title">
			<h1>WELCOME TO EASY TRAVELS</h1>
		</div>
		<div class="button">
			<a href="Tourist/views/Login.php" class="btn">Tourist</a>&nbsp;
			<a href="Serviceprovider/views/login.php" class="btn">Service-Provider</a>
		</div>
	</header>

</body>
</html>