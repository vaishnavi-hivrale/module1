<?php
// This program shows the use of shorthand operator

    // variable initialization
    $a=5;
    $b=10;
    $c=15;
    $d=20;
    $e=25;

    // +=
    echo "a= $a <br>";
    echo "<b> (+=) </b> <br>";
    echo "<b> a = a + 10 </b> <br>";
    $a+=10;
    echo "Value of a: $a <br><br>";

    // -=
    echo "b= $b <br> <b> (-=) </b> <br>";
    echo "<b> b = b - 10 </b> <br>";
    $b -= 10;
    echo "Value of b: $b <br><br>";

    // *=
    echo "c= $c <br> <b> (*=) </b> <br>";
    echo "<b> c = c * 10 </b> <br>";
    $c *= 10;
    echo "Value of c: $c <br><br>";

    // /=
    echo "d= $d <br> <b> (/=) </b> <br>";
    echo "<b> d = d / 10 </b> <br>";
    $d /= 10;
    echo "Value of d: $d <br><br>";

    // %=
    echo "e= $e <br> <b> (%=) </b> <br>";
    echo "<b> e = e % 10 </b> <br>";
    $e %= 10;
    echo "Value of e: $e";



?>