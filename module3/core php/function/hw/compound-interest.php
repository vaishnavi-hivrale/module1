<?php
// This program finds the Compound Interest

//user defined function
    function compound_interest()
    {

        //variable initializaton
        $p=10000;
        $r=3;
        $n=2;
        $t=2;
        
        //print values  of $p, $r, $n, $t;
        echo "<h3 align=center> Principle Amount P: $p </h3>";
        echo "<h3 align=center> Rate of Interest r: $r </h3>";
        echo "<h3 align=center> no of times interest got compounded n: $n </h3>";
        echo "<h3 align=center> Total time span t: $t </h3>";

        //formula to calculate compound address
        $ci=pow($p*(1+$r/$n),$n*$t);

        //print the value of $ci
        echo "<h2 align=center> Compound Interest ci: $ci </h2>";
    }

    //function call
    compound_interest();
?>