<?php
// This function is shows the use of array_reverse() function

    // define array
    $vehicles=array("Car", "Bike", "Auto", "Bicycle", "Train", "Bus", "Aeroplane", "Boat");

    // print array
    echo "<h4> Array vehicles[] </h4>";
    foreach($vehicles as $v)
    {
        echo "$v <br>";
    }

    echo "<h4> Reverse the array </h4>";
    print_r(array_reverse($vehicles));
?>