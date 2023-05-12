<?php
//This program shows how to create userdefined function

    //Define function
    function add()
    {
        //declare and initialize the variables
        $a=10;
        $b=20;

        //print the values of the variable
        echo "a=".$a."<br>";
        echo "b=".$b."<br>";

        //calculate addition
        $c=$a+$b;

        //print the result
        echo "Addition of the two variables is:".$c."<br>";
    }

    //function call
    add();
?>