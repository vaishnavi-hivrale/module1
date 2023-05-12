<?php
// This program shows how to calculate the difference between two dates

    error_reporting(0);

    // Hotel room price
    $room_price=8000;

    // print room  price
    echo "Hotel room price: $room_price <br>";

    // get current date 
    $current_date=date("d/m/y",mktime(0,0,0,date("m"),date("d"),date("y")));

    // print current date
    echo "Check-in date is: $current_date <br>";
    
    // get future date
    $future_date=date("d/m/y",mktime(0,0,0,date("m"),date("d")+2,date("y")));
    
    // print future date
    echo "Check-out date is: $future_date <br>";

    //find differnce between future and current date
    $difference= $future_date - $current_date;

    // find total price
    $subtotal=$room_price*$difference;

    // print total price
    echo "Total paying charge: Rs $subtotal";
?>