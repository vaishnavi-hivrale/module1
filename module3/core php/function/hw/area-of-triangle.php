<?php
//This program calculates the area of Triangle

    //variable initialization
    $height=4;
    $base=3;

    //function to calculate the area of the triangle
    function area_triangle(&$h, &$b)
    {
        //print the value of the Height and base of triangle
        echo "<h3 align=center> Height of the Triangle:".$h."</h3>";
        echo "<h3 align=center> Base of the Triangle:".$b."</h3>";
        
        //formula to calculate the area of triangle
        $area= 1/2*($h * $b);

        //print the value of Area
        echo "<h3 align=center> Area of triangle is:".$area."</h3>";
    }

    //function call by reference
    area_triangle($height, $base)
?>