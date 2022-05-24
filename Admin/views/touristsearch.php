<?php
include '../models/touristlist.php';
$key = $_GET["key"];
$touristlist = search($key);


if(count($touristlist) > 0)
{
    foreach($touristlist as $p)
    {
        // echo "<p>".$p."</p>";
        echo "<a href='edittourist.php?id=".$p.""."'>".$p.""."</a>";
    }   
}

?>
