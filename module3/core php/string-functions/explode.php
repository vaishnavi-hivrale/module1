<?php
// This program shows the use of explode() function

    // define string
    $str="Welcome to our website";

    // explode() function converts the string into into array

    // we have to specify separator (space) and string which will be converted to array
    
    // we have to specify same separator in string as weell as explode function to convert in array properly otherwise it wiil cosider wholw string at first index
    
    // if we not specify separator it will generate fatal error
    
    echo "Before using explode() function: $str <br>";
    
    echo "After using explode function <br>";
    
    print_r(explode("",$str));
?>