<?php
/*
Write a PHP program to find the largest of three numbers using ternary operator.
*/

    // Define variables
    $a=10; $b=20; $c=30;
    
    // print the values of variable
    echo "Value of a: $a <br>";
    echo "Value of b: $b <br>";
    echo "Value of c: $c <br>";

    // check which is the largest number amongst three using ternary operator
    $a>$b && $a>$c ? print("$a is largest") : ( $b>$c ? print("$b is largest") : print("$c is largest") );

?>