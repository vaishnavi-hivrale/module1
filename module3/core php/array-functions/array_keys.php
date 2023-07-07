<?php
// This program sows the use of array_keys() function

    // array_keys() functions is used to get the index of array values

    // define array
    $language=array(1=>"Gujarati", 2=>"Hindi", 3=>"Marathi", 4=>"Tamil", 5=>"Telugu", 6=>"Kannad", 7=>"English");
    $language1=array("A"=>"Python", "B"=>"PHP", "C"=>"C", "D"=>"C++", "E"=>"C#", "F"=>"Java", "G"=>"Android");

    // print array
    echo "<h4> Array1 : Languages spoken in India </h4>";
    foreach($language as $l)
    {
        echo "$l <br>";
    }

    echo "<h4> Array2 : Languages used in Software Development </h4>";
    foreach($language1 as $l1)
    {
        echo "$l1 <br>";
    }
    echo "<br>";

    echo "<b> Keys of Array1 </b> <br>";
    print_r(array_keys($language)); echo "<br>";

    echo "<b> keys of array2 </b> <br>";
    print_r(array_keys($language1));
?>