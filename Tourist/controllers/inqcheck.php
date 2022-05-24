<?php 
	

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		
		$InquiryQuestion = $_REQUEST['InquiryQuestion'];

	
		if(isset($_REQUEST['submit'])){
		
		 if($InquiryQuestion != null){
			
			$sql="insert into inq(InquiryQuestion) values ('$InquiryQuestion')";

			$result= mysqli_query($conn,$sql) or die(mysqli_error());
			if($result){
				header('location: ../views/dash.php');	
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