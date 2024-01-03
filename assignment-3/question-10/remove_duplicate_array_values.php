<?php
    //Que: Write program to remove duplicate values fron=m array.

    // declare array
    $fruits = array("Apple", "Grapes", "Watermelon", "Apple", "Kiwi", "Pineapple", "Gvava", "Pineapple", "Strawberry");

    // print array
    echo "<h4> fruits[] with duplicate values </h4>";
    foreach($fruits as $data)
    {
        echo "$data <br>";
    }

    // remove duplicate values from array
    $fruits1 = array_unique($fruits);

    echo "<h4> fruits[] without duplicate values </h4>";

    foreach($fruits1 as $data1)
    {
        echo "$data1 <br>";
    }
?>