<?php 
    $error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Fill all the fields.";
		}
	}
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
	.submit{
		/* position: absolute; */
		top: 55%;
		left: 55%;
		width: 25%;
		height: 25px;
		border: 2px solid;
		background: #9932CC;
        border-radius: 25px;
        font-size: 15px;
        color: whitesmoke;
        font-weight: 700;
        cursor: pointer;
        outline: none;
		
	}
	.name{

/* position: absolute; */
top: 15%;
left: 50%;
width: 50%;
height: 28px;
border: none;
border-bottom: 3px solid ;
color:#9932CC; 
font-size: 15px;
background: transparent;

}
	
input:hover {background-color: red;}
td:hover {background-color: #9932CC;}
h1:hover {color: green;}
		</style>
</head>

<body>
<span class="SBoyyy" style="font-size:40px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span>

<center>
	
        <h1 class="font-effect-neon SBoyyy"> Welcome to Easy Travels- Admin</h1> 
	    <a class="font-effect-neon SBoyyy" style="color: red" href="dash.php"> Home </a> |
	    <a class="font-effect-neon SBoyyy" style="color: red" href="../controllers/logout.php"> logout </a>	
	<div class="body">
	<div class="naviation">
		
<table>
<tr>

<!-- <td height="150px"> -->
<center><img src="../Photos/inq.png"><br>
	<a class="font-effect-neon SBoyyy" style="color: #800080" href="notice.php"> Notify All </a>
	
<td class="SBoyyy"  style="font-size:22px;color:800080">Inform Important Issue to Service Prover and  Tourist</td>
	
	</td>
</tr>
</table>

			

	   <div class="form">
	<form method="POST">
		<input  id="adminname" type="text" class="adminname"  name="adminname" placeholder="Admin Name"><br>
		<input id="notice" type="text" class="notice" name="notice" placeholder="Notice"><br>
		<input type="submit"class="submit" name="send" onclick="ajaxinsertdata()" value="send">
				<br>
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	<script type = "text/javascript">
   
    
      function ajaxinsertdata()
	    	{

           let adminname1 = document.getElementById('adminname').value;
           let notice1 = document.getElementById('notice').value;
           let json = {
           	  'adminname' :adminname1,
           	  'notice' :notice1,
           };

           let data = JSON.stringify(json);

           if (adminname1 == '' || notice1 == '') {
                alert("Please Fill All Fields");
                } 
                else{
                  let xhttp = new XMLHttpRequest();
                  xhttp.open('POST', '../controllers/noticecheck.php', true);
	               xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	               xhttp.send('data='+data);

	               xhttp.onreadystatechange = function (){
	               	if(this.readyState == 4 && this.status == 200){
			               alert(this.responseText);
			
		               }
	               }

                }

      }

   
</script>

<Center>CopyRight@<span class="SBoyyy" style="font-size:20px;color:green"><b>E</b></span><span class="SBoyyy">asy Travels </span></Center> 
		
</body>
</html>