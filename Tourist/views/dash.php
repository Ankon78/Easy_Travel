<?php 

	require('header.php');
	
?>
<html>
<head>	
	<title>Home Page</title>
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

.TITLE{
            margin-top: 50PX;
            margin-left: 80PX;
            margin-right: 80PX;
           text-align: left;
           color: white;
            padding-left: 40px;
            background: purple;
            height: 40PX;
            line-height: 40PX;
            text-transform: uppercase;
            border: 2px solid purple;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
		.PRO-BODY{
            /* margin-left: 120PX;
            margin-right: 2px;
            margin-top: 3px; */
            padding: 30px;
            background: #CCCCFF;
            border: rebeccapurple 2px solid;
            font-weight: bold;
            color: black;
            font-size: large;
            text-transform: uppercase;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
		
		body  {
 
 background-image: url("22.jpg");
 width: 100%;
}
		
	</style>
</head>
<body>
<center>
	
<h1 class="project">Easy Travels</h1> 
<div class="PRO-BODY">
	<a class="PRO-BODY" href="dash.php"> Home </a>
	<a class="PRO-BODY" href="logout.php"> logout </a>
	<!-- <a class="PRO-BODY" href="personalinfo.php">personal info  </a> </br> -->
	</div>
<table>
	<tr>
	<td colspan="3" align="center" height=150px width=350px>
	
	<center><a class="PRO-BODY" href="serviceproviderlist.php"> Hotels </a></td>
	<td >
		<center><a class="PRO-BODY" href="offerlist.php"> Offered Packages </a> </center>
	</td>
	</tr>
</table>
<table>
<tr>
	<td width="250px" height="100px" >
	<center>
		<a class="PRO-BODY"  href="inq.php"> Inquiries  </a> 
</center>
	</td>
		<td width="250px">
		<center>
		<a class="PRO-BODY" href="visitplace.php"> Visit Places </a> </td>
		<td width="250px"> 
		<center>
		
		<a  class="PRO-BODY" href="reports.php"> Report a Problem </a></td>
	
	</tr>
</table>

<table>
	<tr>
		<td width="250px" height="100px" >
<Center>CopyRight@<span><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
</td>
</tr>
</table>
	
</body>
</html>