<?php 

require('../models/serviceprovider.php');
	if(isset($_REQUEST['submit'])){

		$id = $_REQUEST['id'];
		$tourist = $_REQUEST['tourist'];
		$PhoneNo = $_REQUEST['PhoneNo'];
		$placename = $_REQUEST['placename'];
		$location = $_REQUEST['location'];
		$Duration = $_REQUEST['Duration'];
	

		if($id != null && $tourist != null && $PhoneNo != null && $placename != null && $location != null && $Duration != null){
			
			$status = signup($id,$tourist,$PhoneNo,$placename,$location,$Duration);
			if($status){
				header('location: ../views/offerlist.php');			
			}else{
				echo "Error Occured ... **Please go back and try again**";
			}
			
		}else{
			echo "**Please go back and Fill the form 1st**";
		}
	}

?>