<?php
include '../models/serviceprovider.php';
$key = $_GET["key"];
$serviceprovider = search($key);


if(count($serviceprovider) > 0)
{
    foreach($serviceprovider as $p)
    {
        // echo "<p>".$p."</p>";
        echo "<a href='editserviceprovider.php?serviceproviderno=".$p.""."'>".$p.""."</a>";
    }   
}

?>
