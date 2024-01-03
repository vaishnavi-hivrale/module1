<?php
/*
Write a PHP program to find whether a nuber is Armstrong or not
*/

    // define variable
    $n=370; 
    $sum=0;

    echo "Value of n is: $n <br>";

    // Store the actual number into temporary variable
    $temp=$n;

    // Check whether a number is armstrong or not
    while($temp > 0)
    {

        $m = $temp % 10;

        $sum = $sum + ($m * $m * $m);

        $temp = $temp / 10;
    }

    if($n == $sum)
    {
        print("<h4> $n is an armstrong number </h4>");
    }
    else
    {
        print("<h4> $n is not an armstrong number </h4>");
    }
?>