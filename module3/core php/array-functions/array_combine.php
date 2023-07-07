<?php
// This program shows that how to combine two arrays 

    // When using array_combine() function first array must be index and second array must be it's value

    // define array
    $index=array(0, 1, 2, 3, 4);
    $color=array("white", "black","Blue","Green", "Red");

    // print array
    echo "<h4> Index </h4>";
    foreach($index as $i)
    {
        echo "$i <br>";
    }

    echo "<h4> Values </h4>";
    foreach($color as $values)
    {
        echo "$values <br>";
    }
    echo "<br>";
    
    // combine and print array
    print_r(array_combine($index,$color));
?>