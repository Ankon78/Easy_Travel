<?php 

require('../models/serviceprovider.php');
	if(isset($_REQUEST['submit'])){

		$serviceproviderno = $_REQUEST['serviceproviderno'];
		$tourist = $_REQUEST['tourist'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$CompanyName = $_REQUEST['CompanyName'];
		$Place = $_REQUEST['Place'];
		$Duration = $_REQUEST['Duration'];
	

		if($serviceproviderno != null && $tourist != null && $PhoneNo != null && $CompanyName != null && $Place != null && $Duration != null){
			
			$status = signup($serviceproviderno,$tourist,$PhoneNo,$CompanyName,$Place,$Duration);
			if($status){
				header('location: ../views/serviceproviderlist.php');			
			}else{
				echo "Error Occured ... **Please go back and try again**";
			}
			
		}else{
			echo "**Please go back and Fill the form 1st**";
		}
	}

?>