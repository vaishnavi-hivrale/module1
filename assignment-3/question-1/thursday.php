<?php
/*
Write a PHP program to find thursday in week using switch function.
*/
    
    echo "<h2> Find the fifth day of the week </h2> ";

    // define variable
    $a=5;
    echo "<h3> Value of a: $a </h3>";

    // find fifth day of week using switch
    switch($a)
    {
        case 1: 
            echo "<h3> First day of the week: Sunday </h3>";
            break;
        
        case 2:
            echo "<h3> Second day of the week: Monday </h3>";
            break;
        
        case 3:
            echo "<h3> Third day of the week: Tuesday </h3>";
            break;
        
        case 4:
            echo "<h3> Fourth day of the week: Wednesday </h3>";
            break;

        case 5:
            echo "<h3> Fifth day of the week: Thursday </h3>";
            break;

        case 6:
            echo "<h3> Sixth day of the week: Friday </h3>";
            break;

        case 7:
            echo "<h3> Seventh day of the week: Saturday </h3>";
            break;

        default:
            echo "<h3> Enter valid value </h3>";
            break;
    }

?>
