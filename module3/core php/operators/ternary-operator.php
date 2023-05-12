<?php
// This program shows the use of ternary operator

    //initialize variable
    $a=10;

    //print value of a
    echo "Value of a is: $a <br>";

    // Check if the no. is odd or even using ternary operator
    echo "<h4> Ternary Operator </h4>";
    echo "Check if the no is odd or even using ? : operator <br>";

    // we have to use print() function to print message with ? : operator
    // echo is not supported with ? : opertor
    $a%2==0 ? print("a is even")  : print("a is odd"); 
?>