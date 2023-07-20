<?php 

// constructor inheritance

// class A start
class A 
{

    // constructor of class A start
    public function __construct()
    {
        echo "I am consructor of the class A <br>";
    }
    // constructor of class A end

}
// class A end


// class B start (inherits class A)
class B extends A 
{
    // constructor of class B start
    public function __construct()
    {
        // to inherit the constructor of class A into class B
        parent::__construct();

        echo "I am consructor of the class B <br>";
    }
    // constructor of class B end
 
    
    // method display() start
    public function display()
    {
        echo "I am method of the class B";
    } 
    // method display() end

}
// class B end

// object of class B
$obj = new B;

// call the method of class B using object of class B
$obj->display();

?>