<?php
// This function shows the use of array_pop() function.

    // array_pop() functiom is used to pop/delete last element in array

    // define array
    $color=array("White", "Black", "Green", "Blue", "Red", "Pink");

    // print array
    echo "<h4> Array color[] </h4>";
    foreach($color as $c)
    {
        echo "$c <br>";
    }

    echo "<br> Delete last element from array color[] <br>";

    // delete last element using array_pop()
    array_pop($color);

    echo "<h4> After delete the last element in array color[] </h4>";
    foreach($color as $c)
    {
        echo "$c <br>";
    }
?>