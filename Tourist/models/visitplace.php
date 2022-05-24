<?php 
function getConnection(){
$con = mysqli_connect('localhost', 'root','','webtech');
return $con;
}


    function getAllUsers(){
		$con = getConnection();
		$sql = "select * from hotelbook";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	

    ?>

    