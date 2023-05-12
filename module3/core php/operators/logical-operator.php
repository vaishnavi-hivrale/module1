<?php
// This program shows the use of Logical operators

    // end (&&)
    // check if no. is prime or not   
    $n=7;
    
    echo " <h4>end (&&) <br> check if no. is prime or not </h4 <br>";
    echo "Value of n: $n <br>";

    if($n%2==1 && $n/1==$n)
    {
        echo "$n is a prime number <br>";
    }
    else
    {
        echo "$n is not a prime number <br>";
    }

    
    // or (||)
    // check if a is devided by b or not
    $a=10;
    $b=20;
    
    echo " <h4>or (||) <br> check if a is devided by b  or not </h4 <br>";
    echo "Value of a: $a <br>";
    echo "Value of b: $b <br>";

    if($b=0 || $b>0)
    {
        echo "a can be devided by b <br>";
        $c=$a/$b;
        echo "Division of a and b is $c";   
    }
    else
    {
        echo "a can not be divided by b please enter value of b greater than 0";
    }

    // not (!)
    // use to complement value of the variable 

    $b=0;

    echo " <h4> not (!) <br> Not is used to complement the value of the variable </h4 <br>";
    echo "value of b before complement: $b <br>";

    // not (!) is always written before the variable; it will show the parse error unexpected token "!" if written after the variable
    $b=!$b;
    echo "value of b after complement: $b";

?>