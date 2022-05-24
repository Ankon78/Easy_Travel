<?php 

	require('header.php');
	require('../models/adminlist.php');
	$adminusername = $_REQUEST['adminusername'];
	$user = getUserById($adminusername);
	
?>

<html>
<head>	
	<title>Home Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<style>
        *{
    background-color: rgb(199, 219, 219);
        }
		.SBoyyy{
        font-family: "Audiowide", sans-serif;
        /*font-size: 100%;*/
        font-style: italic;
        font-weight: bolder;
        color: rgb(20, 11, 29);
    }
		</style>
</head>
<body>
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>

<center>
	
        
		<h1 class="font-effect-neon SBoyyy"> Informations of Admin--<?=$user['adminusername']?></h1> 
	
	    <a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	    <a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>

<table>
<tr>
<td>
<center>
	<a class="font-effect-neon SBoyyy" style="color: green" href="myinfo.php"> My Info </a>
</center>
<center>
<h4 class="font-effect-neon SBoyyy"> <?=$user['adminusername']?></h4> 
</center>

 <h4 class="font-effect-neon SBoyyy">User Name    : <?=$user['adminusername']?></h4> 
 <h4 class="font-effect-neon SBoyyy">Address :  <?=$user['adminpass']?></h4> 
 <h4 class="font-effect-neon SBoyyy">Mobile  :   <?=$user['Address']?></h4> 
 <h4 class="font-effect-neon SBoyyy">Email   :   <?=$user['adminusername']?></h4> 

 <center>
 <h3 class="font-effect-neon SBoyyy" style="color: Green">Upload Admin Photo</h3> 
</center>
            <form method="POST" action="../controllers/uploadphotocheck.php" enctype="multipart/form-data">
			Upload Image: <input type="file" name="myfile">
			<input type="submit" name="submit" value="Submit">	
             <center><P> *Note: File must be named as UserID</P></center>

			</form>
 

</td>
</tr>
</table>


	
<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>