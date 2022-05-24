<?php 

	require('header.php');
	
	require('../models/accountant.php');
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
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels</h1> 
		<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
		<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<!-- <td height="150px"> -->
<center><img src="../Photos/4.png"><br>
<a class="font-effect-neon SBoyyy" style="color: 800080" href="accountantlist.php">Accountant List</a><br>
<script src="../js/accountantlist.js"></script>
	<input type="text" class="box" onkeyup="search(this)" placeholder="Search...">
	<div id="suggestions">
	</td>
</td>
</tr>
</table>


<table border="1">
			<tr>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Accountant User ID</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Accountant Name</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Password</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Phone</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Educational Qualification</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Gender</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Date Of Birth</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Blood Group</td>
			</tr>

		
			<?php while($data =mysqli_fetch_assoc($result)){ ?>

<tr>
	<td><?=$data['AccountantNo']?></td>
	<td><?=$data['AccountantName']?></td>
	<td><?=$data['Password']?></td>
	<td><?=$data['Phone']?></td>
	<td><?=$data['education']?></td>
	<td><?=$data['gender']?></td>
	<td><?=$data['date']?></td>
	<td><?=$data['bloodGroup']?></td>
	<td>
	<a href="editaccountant.php?AccountantNo=<?=$data['AccountantNo']?>">EDIT</a> |
		<a href="../controllers/accountantdeletecheck2.php?AccountantNo=<?=$data['AccountantNo']?>">DELETE</a> 
</tr>

<?php } ?>
			
			
		</table>

<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>