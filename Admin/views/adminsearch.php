<?php
include '../models/adminlist.php';
$key = $_GET["key"];
$adminlist = search($key);


if(count($adminlist) > 0)
{
    foreach($adminlist as $p)
    {
        // echo "<p>".$p."</p>";
        echo "<a href='editadmin.php?adminusername=".$p.""."'>".$p.""."</a>";
    }   
}

?>
