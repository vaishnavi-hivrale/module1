<?php
//This function shows how to call the function by value

    //function defination
    //when we call the function by value at that time values are passed in function through arguments or parameter
    function add($a, $b)
    {
        $c=$a+$b;
        echo "Addition of $a and $b= $c";
    }

    //function call by value
    add(10, 20);
?>