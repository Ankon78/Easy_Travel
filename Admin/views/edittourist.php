<?php 
require('header.php');
require('../models/touristlist.php');
$id = $_REQUEST['id'];
$user = getUserById($id);
?>


<html>
<head>	
	<title>Home Page</title>
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
<a class="font-effect-neon SBoyyy" style="color: 800080" href="touristlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/touristeditcheck.php">
	
		
		<fieldset>
			<legend>Update Information</legend>
		<table>
			<tr>
				<td>Tourist Number</td>
				<td><input type="text" name="id" value="<?=$user['id']?>"></td>
			</tr>
			<tr>
				<td>Tourist Name</td>
				<td><input type="text" name="TouristName" value="<?=$user['TouristName']?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="Address" value="<?=$user['Address']?>"></td>
			</tr>
			<tr>
				<td>Phone No</td>
				<td><input type="text" name="PhoneNo" value="<?=$user['PhoneNo']?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email"  value="<?=$user['Email']?>"></td>
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