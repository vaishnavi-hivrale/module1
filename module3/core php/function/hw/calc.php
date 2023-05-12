<?php
//This program calculates addition, subtraction, multiplication, division

    //function to calculate addition of a and b
    function add($a, $b)
    {
        echo "<h2 align=center> Addition </h2>";
        echo "<h4 align=center> value of a: $a <br> value of b: $b </h4>";
        
        $c= $a+$b;
        
        echo "<h4 align=center> Addition of $a and $b: $c </h4>";
    }

    //function to calculate subtraction of a and b
    function subtract($a, $b)
    {
        echo "<h2 align=center> Subtraction </h2>";
        echo "<h4 align=center> value of a: $a <br> value of b: $b </h4>";
        
        $c= $a-$b;
        
        echo "<h4 align=center> Subtraction of $a and $b: $c </h4>";
    }

    //function to calculate multiplication of a and b
    function multiply($a, $b)
    {
        echo "<h2 align=center> Multiplication </h2>";
        echo "<h4 align=center> value of a: $a <br> value of b: $b </h4>";
        
        $c= $a*$b;
        
        echo "<h4 align=center> Multiplication of $a and $b: $c </h4>";
    }
    
    //function to calculate division of a and b
    function division($a, $b)
    {
        echo "<h2 align=center> Division </h2>";
        echo "<h4 align=center> value of a: $a <br> value of b: $b </h4>";
        
        $c= $a/$b;
        
        echo "<h4 align=center> Division of $a and $b: $c </h4>";
    }

    //function call by value
    add(25, 22);
    
    subtract(200, 21);
    
    multiply(12, 9);
    
    division(200, 8);
?>