<?php
// This program shows the use of in_array() function

    // in_array() function is used to find any value in array

    // define array
    $days=array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    // print array
    echo "<h4> Array days[] </h4>";
    foreach($days as $d)
    {
        echo "$d <br>";
    }

    echo "<br> <b> Find Tuseday in array days[] </b> <br>";
    if(in_array("Tuesday", $days))
    {
        echo "Value Found";
    }
    else
    {
        echo "Value not found";
    }
?>