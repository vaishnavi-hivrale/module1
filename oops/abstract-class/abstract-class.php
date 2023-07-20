<?php

// class is declared abstract object cannot be created

// abstract class can be accessed using inheritance

// class A start
abstract class A 
{
    public function display()
    {
        echo "My name is Brijesh"."<br>";
    }
}
// class A end 

// class B start (inherits A)
class B extends A 
{
    public function display1()
    {
        echo "My name is Vaishnavi";
    }
}
// class B end

// object of class B
$obj = new B;

// call method display() and display1() using object of class B
$obj -> display();
$obj -> display1();

?>