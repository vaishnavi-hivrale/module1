<?php
// This function shows the use of arsort() function

    // asort() is used to sort the array values in ascending order by it's values

    // define array
    $continents=array("South America", "North America", "Asia", "Europe", "Antarctica", "Africa", "Australia");

    // print array
    echo "<h4> Before sorting the array </h4>";
    foreach($continents as $c)
    {
        echo "$c <br>";
    }

    echo "<h4> After sorting the array in descending order </h4>";
    $c=arsort($continents);
    foreach($continents as $c)
    {
        echo "$c <br>";
    }
?>