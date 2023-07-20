<?php

// A class is group of members and it's member functions

// how to define class
class employee 
{
    // members 
    public $id = 1;
    public $name = "Megha Patel";
    public $salary = "25000";

    // method to print employee details
    function employee_details()
    {
        echo "Employee id : $this->id <br>";
        echo "Name of employee: $this->name <br>";
        echo "Salary of employee : $this->salary";
    }
}
// class end

?>