<?php
// This program shows the use of foreach loop used in php to display the array

    // define array
    $name=array("Vaishnavi", "Mansi", "Vishakha", "Krish", "Kunj");

    // 1 Method: print_r() function is used to print the array
    echo "<h4> Print array using print_r() function </h4>";
    print_r($name);
    
    // 2 Method: foreach loop
    echo "<h4> Print array using foreach loop </h4>";
    foreach($name as $values)
    {
        echo "$values <br>";
    }
?>