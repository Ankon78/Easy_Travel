<?php
include '../models/bookings.php';
$key = $_GET["key"];
$bookings = search($key);


if(count($bookings) > 0)
{
    foreach($bookings as $p)
    {
        // echo "<p>".$p."</p>";
        echo "<a href='editbookings.php?id=".$p.""."'>".$p.""."</a>";
    }   
}

?>
