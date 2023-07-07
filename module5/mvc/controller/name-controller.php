<?php
require_once("../model/model.php");

class name_controller  
{
    public function __construct()
    {
        if(isset($_POST["sub"]))
        {
            $nm = $_POST["name"];

            echo "<h4 style='text-align:center'> $nm </h4>";
        }
    }
}
    


$obj = new name_controller;

?>