<?php

// traits is a solution of inheritance used
// trait is a feature of php8

// tarit A start
trait A 
{
    // method name() start
    public function name()
    {
        echo "My name is Vaishnavi";
    }
    // method name() end
}
// trait A end

// class B start (uses trait A)
class B 
{
    use A;
}
// class B end

// object of class B
$obj = new B;

// call method name() using object of class B
$obj -> name();

?>