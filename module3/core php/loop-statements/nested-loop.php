<?php
// This program shows the concept of nested loop i. e. loop created in another loop

    // declare variable
    $i; $j;

    // create first loop
    for($i = 1; $i <= 5; $i++)
    {
        // create second loop (nested loop)
        for($j = 1; $j <= $i; $j++)
        {
            // print the value of j
            echo $j;
        }
        echo "<br>";
    }
?>