<?php
// when create the object of the class constructor called automatically

// class A start
class A 
{
    public function __construct()
    {
        echo "This is the default constructor";
    }
}
// class A end

// object of class A
$obj = new A;
?>