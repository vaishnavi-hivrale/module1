<?php

// method overloading : same name with different arguments is known as method overloading
// when we create method overloading in php it will generate fatal error so it is not supported

// class A start
class A 
{
    // method add() start (with two arguments)
    public function add($a, $b)
    {
        $c = $a + $b;

        echo "Addition : $c";
    }
    // method add() end
}
// class A end

// class B start (inherits A)
class B extends A
{
    // method add() start (with three arguments)
    public function add($a, $b, $c)
    {
        $d = $a + $b + $c;

        echo "Addition : $d";
    }
    // method add() end
}
// class B end

// object of class B
$obj = new B;

// call add() method with two arguments using object of class B
$obj -> add(10, 20);

// call add() method with three arguments using object of class B
$obj -> add(10, 20, 30);

?>