<?php

// static keyword : is uded to declare static method

// when we declare static method we not need to create object of the class 
// we can call method using :: (scope resolution operator)

// class A start
class A 
{
    // add() method start (declared static)
    public static function add($a, $b)
    {
        $c = $a + $b;
        echo "Addition $c";
    }
    // add() method end
}
// class A end

// call add() method using :: (scope resolution operator)
A::add(10,20);

?>