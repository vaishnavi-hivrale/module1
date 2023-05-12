<?php
// This program shows the use of ltrim() function

    // initialize variable
    $str="The String object";
    
    // ltrim() function removes the white spaces and characters from the left side
    echo "The string is: &nbsp; $str <br>";
    echo "(Right) After removing The using ltrim(): &nbsp;".ltrim($str,"The"). "<br>";
    echo "(Wrong) After removing String using ltrim(): &nbsp;".ltrim($str,"String");
?>