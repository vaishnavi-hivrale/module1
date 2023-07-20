<?php

/* Multilevel inheritance : one child class inherits the properties of the intermediate child class 
    which works as parent class for this child class and intermediate child class inherits the parent class
    so child class indirectly inherits the properties of parent class 
    
    (parent class) class A -> (intermediate child class) class B -> (child class) class C */


// class A start
class A 
{
    public function display()
    {
        $name = "My name is Brijesh";
        echo "$name <br>";
    }
}
// class A end


// class B start (inherits class A)
class B extends A 
{
    public function display1()
    {
        $name = "My name is Vaishnavi";
        echo "$name <br>";
    }
}
// class B end


// class C start (inherits class B)
class C extends B
{
    public function display2()
    {
        $name = "My name is Mona";
        echo "$name <br>";
    }
}
// class C end


// class D start (inherits class C)
class D extends C 
{
    public function display3()
    {
        $name = "My name is Krupali";
        echo "$name";
    }
}
// class D end


// object of class D
$obj = new D;


// call all  display(), display1(), display2(), display3() using object of class D
$obj -> display();
$obj -> display1();
$obj -> display2();
$obj -> display3();

?>