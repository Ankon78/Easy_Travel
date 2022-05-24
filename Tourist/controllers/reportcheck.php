<?php 
	

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		
		$ReportersId = $_REQUEST['ReportersId'];
		$ReportersName = $_REQUEST['ReportersName'];
        $ReportersPhoneNo = $_REQUEST['ReportersPhoneNo'];
		$ReportersEmail = $_REQUEST['ReportersEmail'];
		$ReportTopic = $_REQUEST ['ReportTopic'];
		$Details = $_REQUEST['Details'];
	
		if(isset($_REQUEST['submit'])){
		
		 if($ReportersId != null && $ReportersName != null && $ReportersPhoneNo != null && $ReportersEmail != null && $ReportTopic!= null && $Details != null){
			
			$sql="insert into reports(ReportersId,ReportersName,ReportersPhoneNo,ReportersEmail,ReportTopic,Details) values ('$ReportersId','$ReportersName','$ReportersPhoneNo', '$ReportersEmail', '$ReportTopic', '$Details')";

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