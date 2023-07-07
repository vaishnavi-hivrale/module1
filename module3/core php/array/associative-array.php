<?php
// This program shows that how to create associative array

    // Associative array means a value defined with its key
    // user can define a key for values in array according to his choice it can be numeric or alphabetic

    // define array

    // associative array with numeric keys
    $city=array(0 => "Rajkot", 1 => "Ahemdabad", 2 => "Surat", 3 => "Pune", 4 => "Mumbai");

    // associative array with alphabet keys
    $state=array("a" => "Gujarat", "b" => "Maharashtra", "c" => "Rajasthan", "d" => "UP");

    // print array
    print_r($city);
    echo "<br>";
    print_r($state);
?>