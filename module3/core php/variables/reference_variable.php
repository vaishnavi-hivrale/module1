<?php
//This program is to show that how to use reference variable in php

    //error reporting is used to hide warnings displayed on the browser
    error_reporting(0);

    //normal variable
    $fname="Vaishnavi";

    //reference variable
    $$lname="Hivrale";

    //print the value sof the variables
    echo "<h1> My name is:".$fname."&nbsp".$$lname."</h1>";
?>