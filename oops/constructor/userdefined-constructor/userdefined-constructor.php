<?php

// constructor which is defined by user is known as userdefined constructor
// In php there is predefined constructor __constructor()
// when we create user defined constructor it becomes normal method and we have to call it using object of class 

// class A start
class A 
{
    // default constructor
    public function __construct()
    {
        echo "I am default constructor <br>";
    }

    // user defined constructor start
    public function user()
    {
        echo "I am user defined constructor";
    }
    // constructor end
}
// class A end

// object of class B
$obj = new A;
$obj -> user();

?>