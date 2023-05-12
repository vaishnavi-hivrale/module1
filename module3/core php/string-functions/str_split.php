<?php
// This program shows the use of str_split() function

    // define string
    $str="Welcome to our website :D ";

    // str_split() function splits the string into array
    // we have to specify number of group of characters in wich array will be splitted
    // str_split() also consider the space as character
    
    echo "Before using str_split() function: $str <br>";
    echo "After using str_split() function: <br>";
    print_r(str_split($str,3));
?>