<?php 
function getConnection(){
$con = mysqli_connect('localhost', 'root','','webtech');
return $con;
}

    function getAllUsers(){
		$con = getConnection();
		$sql = "select * from placetable";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserById($id){
		$con = getConnection();
	    $sql = "select * from placetable where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

    function editUser($user){
		$con = getConnection();
		$sql = "update placetable set id='{$user['id']}', offername='{$user['offername']}', location='{$user['location']}', package='{$user['package']}', offer='{$user['offer']}', description='{$user['description']}' where id='{$user['id']}'";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
    }

	function deleteoffer($id)
{
    $con = getConnection();
    $sql = $con->prepare("DELETE FROM placetable WHERE id=?");
    $sql->bind_param("s", $id);
    $respone = $sql->execute();
   $sql->close();
    $con->close();
    return $respone;
}

    ?>

    