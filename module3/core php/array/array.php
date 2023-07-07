<?php 
// This program shows how to create array in php

    // Define ARRAY WITH INDEX
    $name=array(0 => "Vaishnavi", 1=> "Sakshi", 2=> "Aaradhya", 3 => "Krishna", 4 => "Rudra");

    // Define ARRAY WITHOUT INDEX
    $fruits=array("Apple", "Mango", "Pineapple", "Kiwi", "Grapes");

    // if we don't specify keys it will take numeric index by deault 

    // Print array
    // print_r() function is used to print the values stored in array
    print_r($name);
    echo "<br>";
    print_r($fruits);
?>