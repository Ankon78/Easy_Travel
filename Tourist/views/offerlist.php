<?php 

	require('header.php');
	require('../models/placemodel.php');
	$result = getAllUsers();
	$count = mysqli_num_rows($result);

	
	
?>

<html>
<head>	
	<!-- <title>Home Page</title> -->
	<style>
	.project{
        background: #008080;
        width: 100%;
        height:60px;
        color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        text-align: center;
        font-size: 35px;
        font-weight: bold;
        line-height: 80px;
        }


		.PRO-BODY{
            /* margin-left: 120PX;
            margin-right: 2px;
            margin-top: 3px; */
            padding: 3px;
            background: #CCCCFF;
            border: rebeccapurple 2px solid;
            font-weight: bold;
            color: black;
            font-size: large;
            text-transform: uppercase;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
		</style>
</head>
<body>
<center>
	
    
<h1 class="project">Easy Travels</h1> 

	<a class="PRO-BODY" href="dash.php"> Home </a> 
	
	<a class="PRO-BODY" href="logout.php"> logout </a>
	<a class="PRO-BODY" href="../views/dash.php"> Back </a>

<table>
<tr>
<td height="150px">
	<h4> Offers List </h4>
	</td>
</tr>
</table>


<table border="1">
			<tr>
				<td>ID</td>
				<td>Place Name</td>
				<td>Location</td>
				<td>Package</td>
				<td>Offer</td>
			    <td>Description</td>
			</tr>
			<?php while($data =mysqli_fetch_assoc($result)){ ?>

<tr>
	<td><?=$data['id']?></td>
	<td><?=$data['placename']?></td>
	<td><?=$data['location']?></td>
	<td><?=$data['package']?></td>
	<td><?=$data['offer']?></td>
	<td><?=$data['description']?></td>
	<td>
	<a href="bookoffer.php?id=<?=$data['id']?>">Book</a> |
		
	</td>
</tr>

<?php } ?>
			
			
		</table>

</body>
</html>