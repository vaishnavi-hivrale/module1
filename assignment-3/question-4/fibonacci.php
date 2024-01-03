<?php
/*
Write a program in php to print fibonacci series 0 1 1 2 3 5 8 13 21 34 
*/

    // define variable 
    $a=0;
    $b=1;

    // fibonacci series 
    echo "Fibonacci sereies: $a $b";

    for($i=0; $i<=7; $i++)
    {
        $c=$a+$b;
        echo " $c";
        $a=$b;
        $b=$c;
    }
?>