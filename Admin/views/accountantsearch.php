<?php
include '../models/accountant.php';
$key = $_GET["key"];
$accountant = search($key);


if(count($accountant) > 0)
{
    foreach($accountant as $p)
    {
        // echo "<p>".$p."</p>";
        echo "<a href='editaccountant.php?AccountantNo=".$p.""."'>".$p.""."</a>";
    }   
}

?>
