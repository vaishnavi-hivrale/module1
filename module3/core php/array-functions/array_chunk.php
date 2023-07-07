<?php
// This program is shows the use of array_chunk() function

    // array_chunk() function is used to devide array in chunks(no. of small parts)

    // define array 
    $name= array("Vivan", "Kunj", "Abhishek", "Madhav", "Mayuri", "Vidhya", "Sakshi", "Aaradhya");

    // print array
    echo "<h4> Array name[] </h4>";
    foreach($name as $n)
    {
        echo "$n <br>";
    }

    echo "<h4> devide array in 2 chunks </h4>";
    
    // devide array in chunks
    print_r(array_chunk($name, 2));
?>