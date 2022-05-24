<?php 

require('header.php');

require('../models/serviceprovider.php');
$serviceproviderno = $_REQUEST['serviceproviderno'];
$user = getUserById($serviceproviderno);
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
<a href="serviceproviderlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/bookingcheck.php">

		<fieldset>
			<legend>Update Information</legend>
		<table>
			<tr>
				<td>Service Provider Number</td>
				<td><input type="text" name="serviceproviderno" value="<?=$user['serviceproviderno']?>"></td>
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
				<td><input type="text" name="CompanyName" value="<?=$user['CompanyName']?>"></td>
			</tr>
			<!-- <tr>
				<td>Phone No</td>
				<td><input type="text" name="PhoneNo" value="<?=$user['PhoneNo']?>"></td>
			</tr> -->
			<tr>
				<td>Place</td>
				<td><input type="text" name="Place"  value="<?=$user['Place']?>"></td>
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