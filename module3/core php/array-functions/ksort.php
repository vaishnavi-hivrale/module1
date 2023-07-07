<?php
// This program shows the use of ksort() function

    // ksort() function is used to sort the array bt it's keys
    
    // define array
    $planets=array("M"=>"Mercury", "V"=>"Venus", "E"=>"Earth", "m"=>"Mars", "J"=>"Jupiter", "U"=>"Uranus", "S"=>"Saturn", "N"=>"Neptune");

    // print array
    echo "<h4> Before sorting an array by it's keys </h4>";
    foreach($planets as $p)
    {
        echo "$p <br>";
    }

    echo "<h4> After sorting an array by it's keys in ascending order </h4>";
    ksort($planets);
    foreach($planets as $p)
    {
        echo "$p <br>";
    }
?>