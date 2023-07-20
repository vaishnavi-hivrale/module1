<?php

/*  also known as access specifiers or data visibility process

    applied on class members and memberfunctions

    types 
    1. private : accessed only inside the class
    2. public : accessed anywhere inside or outside the class
    3. protected : accessed inside the class and inside child class which inherits the parent class
*/


// class Access_modifiers start
class Access_modifiers
{
    // declare and initialized varables as public, private, priotected 
    public $public = "This is public variable";
    private $private = "This is private variable";
    protected $protected = "This is protected variable";

    // show() method start
    public function show()
    {
        echo "class : Access_modifires <br><br>";
        echo $this -> public."<br>";
        // private variable inside the class
        echo $this -> private."<br>";
        echo $this -> protected."<br><br>"; 
    }
    // show() method end
}
// class Access_modifiers end


// object of class Access_modifiers
$object = new Access_modifiers;

// call method show() using object of class Access_modifiers
$object -> show();


// class Variable start (inherit Access_modifiers)
class Variable extends Access_modifiers 
{
    public function display()
    {
        echo "class : Variable <br><br>";
        echo $this -> public."<br>";
        // private variable outside the class it will give an error
        echo $this -> private."<br>";
        echo $this -> protected;
    }
}
// class Variable end


// object class Variable
$obj = new Variable;


// call method display() using object of class Variable
$obj -> display(); 


?>