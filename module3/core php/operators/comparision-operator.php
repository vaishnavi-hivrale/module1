<?php
// This program shows the use of comparision opeator in php

    //variable initialization
    $a=10;
    $b=20;

    // grater than (>)
    echo "<b> grater than (>) </b> <br><br>";
    echo "Value of a is: $a <br> Value of b is $b <br>";
    
    if($a > $b)
    {
        echo "a is grater than b <br><br>";
    }
    else 
    {
        echo "a is not grater than a <br><br>";
    }

    
    // less than (<)
    echo "<b> less than (<) </b> <br><br>";
    echo "Value of a is: $a <br> Value of b is $b <br>";
    
    if($a < $b)
    {
        echo "a is less than b <br><br>";
    }
    else
    {
        echo "a is not less than b <br><br>";
    }

    // greater than or equal (>=)
    echo "<b> grater than or equal (>=) </b> <br><br>";
    echo "Value of a is: $a <br> Value of b is $b <br>";

    if($a >= $b)
    {
        echo "a is grater than or equal to b <br><br>";
    }
    else
    {
        echo "b is not greater than or equal to b <br><br>";
    }

    // less than or equal (<=)
    echo "<b> less than or equal (<=) </b> <br><br>";
    echo "Value of a is: $a <br> Value of b is $b <br>";

    if($a <= $b)
    {
        echo "a is less than or equal to b <br><br>";
    }
    else
    {
        echo "a is not less than or equal to b <br><br>";
    }
    
    // is equal (==)
    echo "<b> is equal (==) </b> <br><br>";
    echo "Value of a is: $a <br> Value of b is $b <br>";

    if($a == $b)
    {
        echo "a is equals to b <br><br>";
    }
    else
    {
        echo "a is not equals to b <br><br>";
    }

    // (===)
    echo "<b> === </b> <br><br>";
    echo "Value of a is: $a <br> Value of b is $b <br>";

    $c=$a===$b;
    echo "value of c= $c <br><br>";
    
    // not eual to (!=)
    echo "<b> not equal to (!=) </b> <br><br>";
    echo "Value of a is: $a <br> Value of b is $b <br>";

    if($a != $b)
    {
        echo "a is not equal to b";
    }
    else
    {
        echo "a is equal to b";
    }
?>