<?php
require_once("../model/model.php");
class controller extends model 
{
    public function __construct()
    {
        $name="Vaishnavi";
        echo $name;
    }
  
}

    $obj = new controller;
?>