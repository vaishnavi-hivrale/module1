<?php
// This function shows thw use of rtrim() function

    // Define the variable
    $str="The String object";

    // rtrim() function removes the white spaces and characters from the right side
    echo "The string is: &nbsp; $str <br>";
    echo "(Right) After removing object using rtrim(): &nbsp;".rtrim($str,"object")."<br>";
    
    // it will only remove t in right side from the word object; Because it is matched with t in the word The  
    echo "(Wronng) After removing The and String using rtrim(): &nbsp;".rtrim($str,"The String");
?>