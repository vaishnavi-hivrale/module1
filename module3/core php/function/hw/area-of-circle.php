<?php
//This program finds the area of circle

    //initialization of vaiable 
    $radius=5;

    //user defined function to calculate area
    function circle_area(&$a)
    {
        //print the value of radius
        echo "<h3 align=center> Radius of Circle is:".$a."</h3>";

        //formula to calculate area
        $area=3.14*$a*$a;

        echo "<h3 align=center> Area of Circle is:".$area."</h3>";
    }

    //function call by reference
    circle_area($radius);
?>