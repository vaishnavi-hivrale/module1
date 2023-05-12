<?php
//This program calculates the square and cube of number 2

    //user defined function to calculate square of no. 2
    function square($a)
    {
        $s=pow($a,2);
        return $s;
    }

    //user defined function to calculate cube of number 2
    function cube($a)
    {
        $c=pow($a,3);
        return $c;
    }

    //function call by value
    echo "<h2 align=center> Square of number 2 is:".square(2)."</h2>";
    echo "<h2 align=center> Cube of number 2 is:".cube(2)."</h2>";
?>