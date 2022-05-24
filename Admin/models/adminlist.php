<?php 
function getConnection(){
$con = mysqli_connect('localhost', 'root','','webtech');
return $con;
}
	//require('database.php');
// login page function
	function login($username, $password){
		$con = getConnection();

		$sql = "select * from adminlist where adminusername='{$username}' and adminpass='{$password}'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}
// signup as admin function
    function signup($adminusername,$adminpass,$Address,$PhoneNo,$Email,$OtherInfo){
		$con = getConnection();
		$sql = "insert into adminlist values('{$adminusername}', '{$adminpass}', '{$Address}', '{$PhoneNo}','{$Email}','{$OtherInfo}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
// showing full admin table in adminlist page
    function getAllUsers(){
		$con = getConnection();
		$sql = "select * from adminlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}
// showing selected admin info in edit admin page 
    function getUserById($adminusername){
		$con = getConnection();
	    $sql = "select * from adminlist where adminusername='{$adminusername}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
// function for  edit admin  
    function editUser($user){
		$con = getConnection();
		$sql = "update adminlist set adminusername='{$user['adminusername']}', adminpass='{$user['adminpass']}', Address='{$user['Address']}', PhoneNo='{$user['PhoneNo']}', Email='{$user['Email']}', OtherInfo='{$user['OtherInfo']}' where adminusername='{$user['adminusername']}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
    }
// function for  delete admin 
	function deleteplace($adminusername)
{
    $con = getConnection();
    $sql = $con->prepare("DELETE FROM adminlist WHERE adminusername=?");
    $sql->bind_param("s", $adminusername);
    $respone = $sql->execute();
   $sql->close();
    $con->close();
    return $respone;
}
// function for search admin 
function search($key){
	$con = getConnection();
	$query = "SELECT adminusername from adminlist where adminusername like '%$key%'";
	$result = mysqli_query($con, $query);
	$user = mysqli_fetch_assoc($result);
		return $user;
}
// function for check admin already exist or not 
$con = getConnection();
if(isset($_POST['type']) == 1){
	$adminusername =$_POST['adminusername'];
	 $query ="SELECT * FROM adminlist where adminusername ='".$adminusername."' ";
	$result =mysqli_query($con, $query);
	$rowcount=mysqli_num_rows($result);
	if($rowcount >0){
		echo "<p> <font color=red>Username Not Available</font> </p>";
	}else{
		echo "<p> <font color=green>Username Available</font> </p>";
	}
}
?>



    