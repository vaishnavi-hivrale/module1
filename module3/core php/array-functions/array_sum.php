<?php
// This program calculates the sum of array values,

    // define array 
    $nums=array(145, 178, 167, 190, 478, 798);

    // print array
    foreach($nums as $n)
    {
        echo "$n <br>";
    }

    // calculate the sumof array values
    echo "Sum of array values are: ".array_sum($nums);
?>