<?php 

	require('header.php');
	
	require('../models/inq.php');
	
	$result = getAllUsers();
	$count = mysqli_num_rows($result);

	
?>

<html>
<head>	
	<title>Home Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<style>
        *{
    background-color:  #D8BFD8;
        }
		.SBoyyy{
        font-family: "Audiowide", sans-serif;
        /*font-size: 100%;*/
        font-style: italic;
        font-weight: bolder;
        color: rgb(20, 11, 29);
    }
	input:hover {background-color: white;}
td:hover {background-color: #DDA0DD;}
h1:hover {color: green;}
		</style>
</head>
<body>
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>

<center>
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin</h1> 
	    <a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	    <a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>

<!-- <td height="150px"> -->
<center><img src="../Photos/inq.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: #800080" href="inq.php"> User Inquiries </a>
	</td>
</tr>
</table>




</table>
<table border="1">
			<tr>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Inquiry Question</td>
				<td class="SBoyyy"  style="font-size:12px;color:800080">Reply From Admin</td>
			</tr>
			<?php while($data =mysqli_fetch_assoc($result)){ ?>

<tr>
	<td><?=$data['InquiryQuestion']?></td>
	<td><?=$data['ReplyFromAdmin']?></td>
	
	<td>
	<a href="editinq.php?InquiryQuestion=<?=$data['InquiryQuestion']?>">Reply</a> |
	<a href="../controllers/inqdeletecheck2.php?InquiryQuestion=<?=$data['InquiryQuestion']?>">DELETE</a> 
	
	</td>
</tr>

<?php } ?>
			
			
			
		</table>


<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>