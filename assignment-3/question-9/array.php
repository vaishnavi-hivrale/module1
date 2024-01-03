<?php
// How can you declare the array (all type) in PHP? Explain with example Covert a JSON string to array.

    // declare array one dimensional
    $city= array("Rajkot", "Ahemdabad", "Surat", "Vadodra", "Mumbai", "Pune");

    // print array
    foreach($city as $values)
    {
        print("$values <br>");
    }

    // declare array two dimensional
    $array = array(
                array(1,2,3,4,5),
                array("Vaishnavi", "Bhavna", "Sakshi", "Aaradhya", "Katha")
            );

    foreach($array as $data)
    {
        print_r($data);
    }
?>