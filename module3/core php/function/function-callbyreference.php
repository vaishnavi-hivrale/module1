<?php
//This function shows how to call the function by reference

    //define function
    //when we call the function by reference the actual variable is not passed in the arguments but a copy of the variable is passed in arguments and we have to write that variable in function arguments  with & symbol  
    function display(&$nm)
    {
        echo "My name is: $nm";
    }

    //before function call by reference we have to initialize the variable
    $name="Vaishnavi";

    //function call by reference
    display($name);
?>