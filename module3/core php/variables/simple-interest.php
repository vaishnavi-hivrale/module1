<?php
//This program calculates the Siple Interest

    //initialize the variables
    $p=90000;
    $n=5;
    $r=2;

    //Print the values of the variables
    echo "<h2 align=center> Principle amount p:".$p."</h2>";
    echo "<h2 align=center> No. of years n:".$n."</h2>";
    echo "<h2 align=center> Rate of interest r:".$r."</h2>";

    //Calculate the Simple interest
    $si=$p*$n*$r/100;

    //Print the result
    echo "<h2 align=center> Simple interest si:".$si."</h2>";
?>