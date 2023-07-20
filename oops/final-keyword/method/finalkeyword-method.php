<?php

// final keyword when used with method we cannot override that method

class A 
{
    final public function add($a, $b)
    {
        $c = $a + $b;

        echo "Addition : $c";
    }
}

// it will give an error
class B extends A 
{
    public function add($a, $b)
    {
        parent :: add(10, 20);
        
        $c =  $a * $b;

        echo "Multiplication : $c";
    }
}

$obj = new B;

$obj -> add(10, 20);

$obj -> mul(10, 20);

?>