<?php 

require('header.php');

require('../models/placemodel.php');
$id = $_REQUEST['id'];
$user = getUserById($id);
?>
<html>
<head>	
</head>
<body>
<b>E</b></span><span >asy Travels </span>

<center>
	
        <h1> Welcome to Easy Travels</h1> 

	<a href="dash.php"> Home </a> |
	<a href="myinfo.php"> My Info </a> |
	<a href="../controllers/logout.php"> logout </a>
	
<table><tr><td>
<a href="offerlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/offerbookingcheck.php">

		<fieldset>
			<legend>Update Information</legend>
		<table>
			<tr>
				<td>Service Provider Number</td>
				<td><input type="text" name="id" value="<?=$user['id']?>"></td>
			</tr>
			<tr>
				<td>Tourist Name</td>
				<td><input type="text" name="tourist" value=""></td>
			</tr>
			<tr>
				<td>Mobile No (For Confirming Booking)</td>
				<td><input type="text" name="PhoneNo"  value=""></td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="placename" value="<?=$user['placename']?>"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location"  value="<?=$user['location']?>"></td>
			</tr>
			<tr>
				<td>Duration</td>
				<td><input type="text" name="Duration"  value=""></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="BOOK"></td>
			</tr>
		</table>
		</fieldset>
	</form>


<Center>CopyRight@<b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>