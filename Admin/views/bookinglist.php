<?php 

	require('header.php');
	require('../models/bookings.php');
	$result = getAllUsers();
	$count = mysqli_num_rows($result);

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
	.box{
       /* position: absolute; */
        top: 22%;
        left: 20%;
        width: 25%;
        height: 28px;
        border: 3px solid ;
        border-radius: 25px;
        border-color: 9932CC;
        color:9932CC;
        font-size: 15px;
        background-color: #DDA0DD;
    }

td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

input:hover {background-color: white;}
td:hover {background-color: #DDA0DD;}
h1:hover {color: green;}
		</style>
</head>
<body>
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>


<center>
	
    <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin.</h1> 

	<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<!-- <td height="150px"> -->
<center><img src="../Photos/book.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: green" href="bookinglist.php">Booking Info</a><br>

<script src="../js/bookinglist.js"></script>
<input type="text" class="box" onkeyup="search(this)" placeholder="Search...">
<div id="suggestions">
	</td>
</tr>
</table>

<table border="1">
			<tr>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Booking Number</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Tourist</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Service Provider</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Place</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Duration</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Cost</td>
			</tr>

	<?php while($data =mysqli_fetch_assoc($result)){ ?>
			<tr>
	<td><?=$data['id']?></td>
	<td><?=$data['tourist']?></td>
	<td><?=$data['Serviceprovider']?></td>
	<td><?=$data['Place']?></td>
	<td><?=$data['Duration']?></td>
	<td><?=$data['Cost']?></td>
	<td>
	<a href="editbookings.php?id=<?=$data['id']?>">EDIT</a> |
		<a href="../controllers/bookingsdeletecheck2.php?id=<?=$data['id']?>">DELETE</a> 
	</td>
</tr>

<?php } ?>
			
			
		</table>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>