<?php
// This function shows the use of stristr() function

    // define variable
    $str="Hello World";

    // stristr()  match the string from left if the word is matched it will print the word as well as all remaining words after the matched word in the string

    // stristr() function is case-insensitive (Hello and hello both are same)
    echo "The string is: $str <br>";
    echo "match the string <b> world </b> using stristr():".stristr($str,"world");
?>