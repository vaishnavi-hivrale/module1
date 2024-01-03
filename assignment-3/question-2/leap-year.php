<?php
// Write a PHP program to check Leap years between 1901 to 2016 Using nested if. 

    // for loop start
    for($year=1901; $year<=2016; $year++)
    {
        // check if year is devisible by 4 = leap year
        if($year % 4 == 0)
        {
            // check if year is not divisible by 100 = leap year
            if($year % 100 != 0)
            {
                print("<b> $year is a leap year </b> <br>");                
            }
            // check if year is devisible by 400 = leap year (it is a century leap year which comes every 400 year)
            else if($year % 400 == 0)
            {
                print("<b> $year is a leap year </b> <br>");
            }
            // else not a leap year
            else
            {
                print("$year <br>");
            }
        }
        // else not a leap year
        else
        {
            print("$year <br>");
        }
    }
    // for loop end
?>       