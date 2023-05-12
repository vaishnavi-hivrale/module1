<?php
// This programm shows the use of trim() function

    // define variable
    $str="The String object";
    
    // remove "The" from the String
    // trim() function removes the white spaces and characters in the strings from both sides
    echo "The string is: &nbsp; $str <br>";
    echo "After removing The using trim() function:&nbsp;".trim($str, "The")."<br>"; 
    echo "After removing object : &nbsp;".trim($str, "object")."<br>";
    echo "After removing The and object : &nbsp;".trim($str, "The object");
?>