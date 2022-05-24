<?php 
   
   require_once('../models/adminlist.php');
   
 ?>
	<html>
		<head></head>
		<body>
	// if(isset($_REQUEST['update'])){
		
	// 	$adminusername = $_REQUEST['adminusername'];
	// 	$adminpass = $_REQUEST['adminpass'];
	// 	$Address = $_REQUEST['Address'];
	// 	$PhoneNo = $_REQUEST['PhoneNo'];
	// 	$Email = $_REQUEST['Email'];
	// 	$OtherInfo = $_REQUEST['OtherInfo'];
	
	// 	$user = ['adminusername'=>$adminusername, 'adminpass'=>$adminpass, 'Address'=>$Address, 'PhoneNo'=> $PhoneNo, 'Email'=> $Email,'OtherInfo'=> $OtherInfo];

	// 	$status = editUser($user);
	
	// 	if($status){
	// 		header('location:../views/adminlist.php');
	// 	}else{
	// 		header('location:../views/edit.php?adminusername='.$adminusername);
	// 	}
	// }
	<?php 
    if(isset($_GET['adminusername'])){
    $searchid = searchUser($_GET['adminusername']);

?> 
	<form>
    <table>
        <tr>
                
				<td >Admin Unique ID</td>
				<td  >Admin Password </td>
				<td  >Address</td>
				<td  >Phone No</td>
				<td  >Email</td>
				<td  >Other Info</td>
                
                            </tr>
            <tr>
           
             <tr>
               <?php 
                 echo "<td>" . $searchid['adminusername']"</td>";
                 echo "<td>" . $searchid['adminpass'] "</td>";
                 echo "<td>" . $searchid['Address'] . "</td>";
                 echo "<td>" . $searchid['PhoneNo'] . "</td>";
                 echo "<td>" . $searchid['Email'] . "</td>";
                 echo "<td>" . $searchid['OtherInfo'] . "</td>";
               ?>             
            </tr>
            
          
    </table>
	</form>

