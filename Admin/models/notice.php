<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";
		$dbuser = "root";
		$dbpass = "";

		$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $con;
	}
	
	function addnotice($adminname, $notice){
		$con = getConnection();
		$sql = "insert into notice values('{$adminname}', '{$notice}')";
		echo $sql;
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
	

?>
 