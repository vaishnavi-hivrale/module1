<?php
//This program shows use of the predefined function in php

    //Initialize the variables
    $name="Aaradhya";
    $n=2;

    //print the values of variable
    echo "Variables<br>";
    echo "name=".$name."<br>";
    echo "n=".$n."<br><br>";

    //var_dump() is the predefined function to identify datatype of the variable
    echo "Data types of variables <br> Function= var_dump(variable_name); <br>";
    echo var_dump($name)."<br>";
    echo var_dump($n)."<br>";

    //pow() is the predefined math function to find the poer of the any number
    echo "Function= pow(variable_name or value, power); <br>";
    echo "Square of 2=".pow($n,2); 
?>