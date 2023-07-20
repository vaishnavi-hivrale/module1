<?php

// method overriding : same name with same arguments is known as method overriding

// class A start
class A 
{
    // sum() method start
    public function sum($a, $b)
    {
        $c = $a + $b;

        echo "Addition : $c <br>";
    }
    // sum() method end 
}
// class A end

// class B start (inherits A)
class B extends A
{

    // sum() method start
    public function sum($a, $b)
    {
        // call parent class method sum() using :: operaor
        parent::sum($a, $b);

        $c = $a * $b;

        echo "Multiplicaton : $c";
    }
    // sum() method end

}
// class B end

// object of class B
$obj = new B;

// call sum() method using object of class

$obj->sum(10, 20);


?>