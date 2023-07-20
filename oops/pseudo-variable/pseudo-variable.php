<?php

// denoted by $this
// Pseudo variable is used to call a global variable inside the member function 

class Name
{
    // global variable $name
    public $name = "My name is Vaishnavi";

    public function display()
    {
        // pseudo variable called inside the member function using $this
        echo $this->name;
    }
}

$obj = new Name;

$obj -> display();
?>