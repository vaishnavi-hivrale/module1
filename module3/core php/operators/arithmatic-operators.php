<?php
//This program shows the use of Arithmatic Operator in php

    // Addition (+)
    function add($a, $b)
    {
        echo "<h4> Addition </h4>";
        echo "Value of a: $a <br>";
        echo "Value of b: $b <br>";

        $c=$a+$b;

        echo "Addition of $a and $b is: $c";
    }

    // Subtraction (-)
    function subtract($a, $b)
    {
        echo "<h4> Subtraction </h4>";
        echo "Value of a: $a <br>";
        echo "Value of b: $b <br>";

        $c=$a-$b;

        echo "Subtraction of $a and $b is: $c";
    }

    // Multiplication (*)
    function multiply($a, $b)
    {
        echo "<h4> Multiplication </h4>";
        echo "Value of a: $a <br>";
        echo "Value of b: $b <br>";

        $c=$a*$b;

        echo "Multiplication of $a and $b is: $c";
    }

    // Division (/)
    function division($a, $b)
    {
        echo "<h4> Division </h4>";
        echo "Value of a is: $a <br>";
        echo "Value of b is: $b <br>";

        $c=$a/$b;

        echo "Division of $a and $b is: $c";
    }

    // Modulo (%)
    function modulo($a, $b)
    {
        echo "<h4> Modulo </h4>";
        echo "Value of a is: $a <br>";
        echo "Value of b is: $b <br>";

        $c=$a%$b;

        echo "Modulo of $a and $b is: $c";
    }

    //function call by value
    add(10, 20);

    subtract(200, 100);

    multiply(10, 20);

    division(108, 12);

    modulo(25, 2);

?>