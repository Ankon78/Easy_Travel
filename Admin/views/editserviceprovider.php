<?php 

require('header.php');

require('../models/serviceprovider.php');
$serviceproviderno = $_REQUEST['serviceproviderno'];
$user = getUserById($serviceproviderno);
?>
?>
<html>
<head>	
	<title>Home Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<style>
        *{
    background-color:#D8BFD8;
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
		width: 55%;
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
	.submit:hover {color: 9932CC;}
.submit:hover {background: white}
		</style>
</head>
<body>
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>

<center>
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin</h1> 

	<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |

	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>
	
<table><tr><td>
<a class="font-effect-neon SBoyyy" style="color: 800080" href="serviceproviderlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/serviceprovidereditcheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Update Information</legend>
		<table>
			<tr>
				<td>Service Provider Number</td>
				<td><input type="text" name="serviceproviderno" value="<?=$user['serviceproviderno']?>"></td>
			</tr>
			<tr>
				<td>Service Type</td>
				<td><input type="text" name="ServiceType" value="<?=$user['ServiceType']?>"></td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="CompanyName" value="<?=$user['CompanyName']?>"></td>
			</tr>
			<tr>
				<td>Phone No</td>
				<td><input type="text" name="PhoneNo" value="<?=$user['PhoneNo']?>"></td>
			</tr>
			<tr>
				<td>Place</td>
				<td><input type="text" name="Place"  value="<?=$user['Place']?>"></td>
			</tr>
			<tr>
				<td>Other Info</td>
				<td><input type="text" name="OtherInfo"  value="<?=$user['OtherInfo']?>"></td>
			</tr>
		
			<tr>
				<td></td>
				<td><input class="submit" type="submit" name="update" value="update"></td>
			</tr>
		</table>
		</fieldset>
	</form>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>