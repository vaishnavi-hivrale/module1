<?php
// This program shows how to create the star triangle using nested loop

    // declare variables 
    $i; $j;

    // create first loop
    for($i = 1; $i <= 5; $i++)
    {   
        // create second loop 
        for($j = 1; $j <= $i; $j++)
        {
            // print triangle
            echo " *";
        }
        echo "<br>";
    }
?>