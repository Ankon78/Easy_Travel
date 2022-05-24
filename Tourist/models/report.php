<?php 
function getConnection(){
$con = mysqli_connect('localhost', 'root','','webtech');
return $con;
}


    function signup($ReportersId,$ReportersName,$ReportersPhoneNo,$ReportersEmail,$ReportTopic,$Details){
		$con = getConnection();
		$sql = "insert into reports values('{$ReportersId}', '{$ReportersName}', '{$ReportersPhoneNo}', '{$ReportersEmail}','{$ReportTopic}','{$Details}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
  
    ?>

  