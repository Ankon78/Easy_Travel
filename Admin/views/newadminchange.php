<?php
include '../models/adminlist.php';

$adminusername = $_GET["adminusername"];

$rs =checkadmin($adminusername);
if($rs){
    alert("Already Used Id");
}
else
{
    echo "valid";
}
?>
