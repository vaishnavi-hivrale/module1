<?php
// Multiple inheritance : one child class inherits multiple parent class known as multiple inheritance
// interface used to apply multiple inheritance
// function is declared in interface and defined in child class


// interface A start
interface A 
{
    // declare method display()
    public function display();
}
// interface A end


// interface B start
interface B 
{
    // declare method display1()
    public function display1();
}
// interface B end


// interface C start
interface C 
{
    // declare method display2()
    public function display2();
}
// interface C end


// interface D start
interface D 
{
    // declare method display3()
    public function display3();
}
// interface D end


// class E start (inherits class A, B, C, D)
class E implements A, B, C, D 
{
    // define method display() of interface A
    public function display()
    {
        echo "Vinod <br>";
    }

    // define method display1() of interface B
    public function display1()
    {
        echo "Mitesh <br>";
    }

    // define method display2() of interface C
    public function display2()
    {
        echo "Sweta <br>";
    }

    // define method display3() of interface D
    public function display3()
    {
        echo "Prakruti";
    }
}
// class E end


// object of class E 
$obj = new E;


// call display(), display1(), display2(), display3() using object of class E
$obj -> display();
$obj -> display1();
$obj -> display2();
$obj -> display3();

?>