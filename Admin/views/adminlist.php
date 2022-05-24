<?php 

	require('header.php');

	require('../models/adminlist.php');
	$result = getAllUsers();
	$count = mysqli_num_rows($result);

	
?>
<!-- Html start -->
<html>
<head>	
	<title>Home Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">   
	<!-- <-- for design purpus--> 
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
/* search box design */
	.box{
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
/* color change in search box and different  */
		input:hover {background-color: white;}
		td:hover {background-color: #DDA0DD;}
		h1:hover {color: green;}

</style>
</head>


<!-- main body -->


<body>
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>

<center>
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels</h1> 
		<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
		<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<!-- <td height="150px"> -->
<center><img src="../Photos/3.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: #800080" href="adminlist.php">Admin List</a><br>
<!-- search work -->
	<script src="../js/adminlist.js"></script>
	<input type="text" class="box"  onkeyup="search(this)" placeholder="Search...">
	<div id="suggestions">
</div>
	</td>
</tr>
</table>



<table border="1">
			<tr>
				<td class="SBoyyy"  style="font-size:12px;color:800080" >Admin Unique ID</td>
				<td class="SBoyyy" style="font-size:12px;color:800080" >Admin Password </td>
				<td class="SBoyyy" style="font-size:12px;color:800080" >Address</td>
				<td class="SBoyyy" style="font-size:12px;color:800080" >Phone No</td>
				<td class="SBoyyy" style="font-size:12px;color:800080" >Email</td>
				<td class="SBoyyy" style="font-size:12px;color:800080" >Other Info</td>
			</tr>

			<?php while($data =mysqli_fetch_assoc($result)){ ?>

<tr>

	<td><?=$data['adminusername']?></td>
	<td><?=$data['adminpass']?></td>
	<td><?=$data['Address']?></td>
	<td><?=$data['PhoneNo']?></td>
	<td><?=$data['Email']?></td>
	<td><?=$data['OtherInfo']?></td>
	<td>
	<a href="editadmin.php?adminusername=<?=$data['adminusername']?>">EDIT</a> |
	<a href="../controllers/admindeletecheck2.php?adminusername=<?=$data['adminusername']?>">DELETE</a> 
		
	</td>
</tr>

<?php } ?>
		</table>
<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>