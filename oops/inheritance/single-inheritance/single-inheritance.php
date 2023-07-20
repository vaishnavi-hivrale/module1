<?php
// Inheritance : Properties of one class is accessed by another class is known as inheritance
// Single Inheritance : one child class inherits only one parent class 
// (parent class) class A -> (child class) class B


// class A start
class A 
{
    // display() method start
    public function display()
    {
        $name = "My namme is Brijesh";
        echo "$name <br>";
    }
    // display() method end
} 
// class A end


// class B start (inherits class A)
class B extends A 
{
    // display1() method start
    public function display1()
    {
        $name1 = "My name is Vaishnavi";
        echo "$name1";
    }
    // dispaly1() method end
}
//  class B end


// object of class B
$obj = new B;


// call display() method of class A using object of class B
$obj -> display();


// call display1() method of class B using object of class B
$obj ->display1();
?>