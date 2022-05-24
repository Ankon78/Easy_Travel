<html>
<head>
	<title>Signup</title>
	<style>	body  {
 
 background-image: url("22.jpg");
 width: 100%;
}
.home{
        padding-right: 20px;
        color:blue;
        font-size: 18px;
        text-transform: uppercase;
        text-align: right;
        /* color: white; */
        text-decoration: underline;
        }</style>
</head>
<body>
<div class="home">
        <a class="active" href="dash.php"><strong>Back Home</strong> </a>
    </div>
<form method="POST" action="../controllers/reportcheck.php" enctype="multipart/form-data">
  	 	<table border="1" width="100%">
	 <tr height="100px">
		<td colspan="2">    
		<Center> 
		<span style="font-size:40px;color:green"><b>E</b></span><span style="font-size:25px">asy Travels</span>
		</Center> 
<Center>
			
</Center> 
</td>
</tr>
 <tr>
		   <td colspan="2">
		   <fieldset>
			<center>
		   <table border="1" style="width:50%">
		   <tr> 
	  <td colspan="3"><center><h2>Report Issue</h2></center></td>
	   
   </tr>
    <tr>
		   <td >Reporters Id</td>
	   <td><input type="text" name="ReportersId" value="" /> </td>
</tr>
   <tr>
		   <td >Reporters Name</td>
	   <td><input type="text" name="ReportersName" value="" /> </td>
	</tr><tr>
		   <td >Phone</td>
	   <td><input type="text" name="ReportersPhoneNo" value="" /> </td>
	</tr><tr>
		   <td >Email</td>
	   <td><input type="text" name="ReportersEmail" value="" /> </td>
	</tr><tr>
		   <td >Topic</td>
	   <td><input type="text" name="ReportTopic" value="" /> </td>
	</tr>
	<tr>
		   <td >Details</td>
	   <td><input type="text" name="Details" value="" /> </td>
	</tr>
		   
			 <tr>
			   <td height="20px"colspan="3">
				   <input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Clear">
			   </td>
			 </tr>
		 </table>
	</form>
</body>
</html>