<?php
//This program shows the use of datatypes in php as we don't specify the type of variable at the time of declaration

    //declare and define variables

    //innteger variable Numeric values
    $a=1234;
    
    //float variable decimal values having points;
    $b=123.567;

    //String variable alphabet characters in double quotes
    $c="Vaishnavi";

    //Sring variable in single quotes
    $d='Hello';

    //Numeric value in double quotes but have is also called string
    $e="123456";

    //print the values of the variable 
    echo "<h4> Variables </h4>";
    echo "<h4> a=".$a."</h4>";
    echo "<h4> b=".$b."</h4>";
    echo "<h4> c=".$c."</h4>";
    echo "<h4> d=".$d."</h4>";
    echo "<h4> e=".$e."</h4> <br>";

    //var_dump() function is used to idenify variables data type and description
    echo "<h4> Datatypes of the Variables </h4>";
    echo "<h4>".var_dump($a)."</h4>";
    echo "<h4>".var_dump($b)."</h4>";
    echo "<h4>".var_dump($c)."</h4>";
    echo "<h4>".var_dump($d)."</h4>";
    echo "<h4>".var_dump($e)."</h4>";
?>