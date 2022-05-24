<?php
$con = mysqli_connect('localhost', 'root','', 'webtech');
if($con){
	echo "OKAY";
} else{
	echo "NOT OKAY";
}
?>