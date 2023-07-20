<?php

// when we pass parameters in constructor is known as parameterized constructor

// class A start 
class A 
{

    // parameterized constructor start
    public function __construct($name, $age)
    {
        echo "My name is: $name <br>";
        echo "My age : $age";
    }
    // parameterized constructor end

}
// class B end

// object of class A (we will pass the value of parameters while create object) 
$obj = new A("Aaradhya", 10);

?>