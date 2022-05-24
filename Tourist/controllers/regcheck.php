<?php 
	

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		
		$id = $_REQUEST['id'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
        $email = $_REQUEST['email'];
		
		if(isset($_REQUEST['submit'])){
		
		 if($id != null && $username != null && $password != null && $email != null ){
			
			$sql="insert into users(id,username,password,email) values ('$id','$username','$password', '$email')";

			$result= mysqli_query($conn,$sql) or die(mysqli_error());
			if($result){
				echo("Submitted Successfully");
				header('location: ../views/login.php');	
			}
			else{
				echo("Not Submitted");
			}
		} 
		else{
			echo("All information required");
		}
	}

		
	
?>