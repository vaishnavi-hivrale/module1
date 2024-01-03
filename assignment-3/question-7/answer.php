<?php
/*
Question: What will be the values of the $a and $b after the code below is executed ?
$a='1';
$b=&$a;
$b="2$b";


    Answer : variable a and b both have same value 21 after execution of this code. it was happened because
    we pass the reference of variable into variable b.
    
     Some how it works like poiner when we pass reference of a like &$a  $b then the address of $a inmemory location is passed in $b. 
    
    When we change the value of $b it will go to memory location address
    of $a and change the actual value of $a.
    
    hence, the value of $a and $b both will be changed.

*/

    // initialize and print variable a
    $a='1';
    echo "value of a: $a <br>";

    // initialize and print variable b
    $b=&$a;
    echo "Value of b: $b <br>";

    // reinitialize and print variable b
    $b="2$b";
    echo "Value of b: $b <br>";

    // print final values of a and b
    echo "Final value of a: $a <br>";
    echo "Final value of b: $b <br>";

?>