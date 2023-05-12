<?php
// This program shows the use of  implode() function

    // define array
    $city=array("Rajkot", "Ahemdabad", "Surat", "Mumbai", "Pune", "Lucknow");

    // implode() function coverts array into string 
    
    // we have to specify separation mark (i. e. coma, hyphen, dot, or space) and array which will be converted to string

    // if we not specify separator it will generate fatal error
    
    echo "Before using implode function: <br>";
    
    print_r($city);
    
    echo "<br> After using implode function: <br>".implode(", ", $city);
?>