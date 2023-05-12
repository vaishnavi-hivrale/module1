<?php
// This function shows the use of strstr() function

    // strstr() funvtion is used to match two strings from left side and it is case-sensitive

    // define variable
    $str="Hello World";

    echo "The string is: $str <br>";

    // strstr()  match the string from left if the word is matched it will print the word as well as all remaining words after the matched word in the string

    // strstr() function is case-sensitive (Hello and hello are not same)
    echo " Match the string <b> Hello </b> using strstr() function: &nbsp;".strstr($str, "Hello")."<br>";

    echo " Match the string <b> World </b> using strstr() function: &nbsp;".strstr($str, "World");
?>