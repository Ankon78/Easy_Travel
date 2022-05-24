<?php 

	require('header.php');
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
	
        <h1 class="font-effect-neon SBoyyy"> Informations of Admin </h1> 

	<a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="searchmyinfo.php"> My Info </a> |
	<a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>
	
<table><tr><td>
<a class="font-effect-neon SBoyyy" style="color: Green" href="adminlist.php"> Back </a>
</td></tr></table>


	<form method="POST" action="../controllers/searchmyinfocheck.php"method="GET" name="Sform" onsubmit="Result(this); return false;">
	
		<fieldset>
			<legend>Update Information</legend>
		<table>
			<tr>
				<td> ID</td>
				<td><input type="text" name="adminusername" value=""></td>
			</tr>
				<td></td>
				<td><input type="submit" name="submit" value="Search" ></td>
			</tr>
		</table>
		</fieldset>
	</form>

	<script >
    var action = "../controllers/searchmyinfocheck.php";
     function Result(pform) {
         var xhttp = new XMLHttpRequest();
         xhttp.onload = function(){
         document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?adminusername=" +pform.adminusername.value);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send();
       }
              </script>
			  
<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
	
</body>
</html>