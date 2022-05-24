<?php 
	session_start();
    require('../models/notice.php');

	

	$data = $_POST['data'];
	$json = json_decode($data);

	$adminname=$json->adminname;
	$notice=$json->notice;

	
	$status=addnotice($adminname, $notice);
			 if($status){
			 	echo "Submit Successful";
    			//header('location: ../views/home.php');
    		}
    		else{
    			echo("Form not submitted");
    		}
    	


?>