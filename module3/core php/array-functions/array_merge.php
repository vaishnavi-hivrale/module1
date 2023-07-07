<?php
// This program shows how to merge more than two array usig array_merge function

    // define array
    $ar1=array("a"=>"Mango", "b"=>"Apple", "c"=>"Strawberry");
    $ar2=array("a"=>"Pineapple", "b"=>"Apple", "c"=>"Strawberry");
    $ar3=array("a"=>"Kiwi", "b"=>"Guava", "c"=>"Strawberry");

    // print array
    echo "<h4> Array 1 </h4>";
    foreach($ar1 as $a1)
    {
        echo "$a1 <br>";
    } 

    echo "<h4> Array 2 </h4>";
    foreach($ar2 as $a2)
    {
        echo "$a2 <br>";
    }

    echo "<h4> Array 3 </h4>";
    foreach($ar3 as $a3)
    {
        echo "$a3 <br>";
    }

    echo "<br> <b> After array merge </b> <br>";
    print_r(array_merge($ar1, $ar2, $ar3));
?>