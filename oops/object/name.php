<?php

// object : object is an instance of class

class Name
{
    function printName()
    {
        $name = "My name is : Vaishnavi";

        echo $name;
    }

}

// object is always created outside of the class and has the same name as class name
$obj = new Name;

// we can access the printName() method using object 
$obj -> printName();

?>