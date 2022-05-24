<?php 

	require('header.php');

	require('../models/accountant.php');
	$AccountantNo = $_REQUEST['AccountantNo'];
	$user = getUserById($AccountantNo);
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
<a class="font-effect-neon SBoyyy" style="color: 800080" href="accountantlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/accountanteditcheck.php">
	
		<fieldset>
			<legend>Update Information</legend>
		<table>
		<tr>
				<td>Accountant User ID</td>
				<td><input type="text" name="AccountantNo" value="<?=$user['AccountantNo']?>"></td>
			</tr>
			<tr>
				<td>Accountant Name</td>
				<td><input type="text" name="AccountantName" value="<?=$user['AccountantName']?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Password" value="<?=$user['Password']?>"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="Phone" name="Phone" value="<?=$user['Phone']?>"></td>
			</tr>
			<tr>
				<td>Educational Qualification</td>
				<td><input type="text" name="education" value="<?=$user['education']?>"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender"  value="<?=$user['gender']?>"></td>
			</tr>
			
			<tr>
				<td>Date of Birth</td>
				<td><input type="text" name="date"  value="<?=$user['date']?>"></td>
			</tr>
			<tr>
				<td>bloodGroup</td>
				<td><input type="text" name="bloodGroup"  value="<?=$user['bloodGroup']?>"></td>
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