<?php
// This function shows the use of array_push() function

    // array_push() function is used to push/insert an element in array
    
    // define array
    $city=array("Rajkot", "Ahemdabad", "Surat", "Gandhinagar");

    // print array
    echo "<h4> Array city[] </h4>";
    foreach($city as $c)
    {
        echo "$c <br>";
    }

    echo "<br> Insert <b> 'Vadodara' </b> in array city[]";
    
    // Insert element in last using array_push()
    array_push($city, "Vadodara");

    echo "<h4> after inserting an element at last position in array city[] </h4>";
    foreach($city as $c)
    {
        echo "$c <br>";
    }
?>