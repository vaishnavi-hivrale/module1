<?php
/* This program shows how to print following pattern
    *****
    *
    *
    *
    *****
*/

    // first loop for print 5 star in first line
    for($i=5; $i>=1; $i--)
    {
        print("*");
    }

    // second loop for print vertical 3 stars
    for($j=1; $j<=3; $j++)
    {
        
        print("<br> * ");
    }

    echo "<br>";

    // Third loop for print 5 star in the last line
    for($k=5; $k>=1; $k--)
    {
        print("*");
    }
?>