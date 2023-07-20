<?php

// final keyword : final keyword when used with class that class cannot be inherit

// class A start (declared final)
final class A 
{
    public function dispaly()
    {
        echo "This is the method of final class A";
    }
}
// class A end

// it will give an error
// class B extends A
// {
//     public function show()
//     {
//         echo "This is the method of class B which inherts class A";
//     }
// }

// $obj = new B;

// $obj -> display();

// class B start
class B 
{
    // show() method start
    public function show()
    {
        echo "This is the method of class B";
    }
    // show() method end
}
// class B end


// object of class B
$obj = new B;

// call show() method using object of class B
$obj -> show();

?>