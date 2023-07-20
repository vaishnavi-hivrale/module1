<?php

// class Person start
class Person
{
    public $name;
    public $age;

    // printPersonDetails() method start
    public function printPersonDetails($nm, $ag)
    {
        // how to call pseudo variable in function when using call by value
            // $this -> global_variable_name = name in function argument(parameter) 

        echo "Name : ". $this->name = $nm ."<br>";
        echo "Age : ". $this->age = $ag ."<br>";
    }
    // printPersonDetails() method end
}
// class Person end

// object
$obj = new Person;

// call method  printPersonDetails()
$obj -> printPersonDetails("Aaradhya", 10);

?>