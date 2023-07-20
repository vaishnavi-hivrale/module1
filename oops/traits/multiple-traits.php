<?php

// trait A start
trait A 
{
    // method color1() start
    public function color1()
    {
        echo "Red <br>";
    }
    // method color1() end

}
// trait A end

// trait B start
trait B 
{
    // method color2() start
    public function color2()
    {
        echo "Green <br>";
    }
    // method color2() end

}
// trait B end

// trait C start
trait c 
{
    // method color3() start
    public function color3()
    {
        echo "Yellow";
    }
    // method color3() end
}
// trait C end

// class D start (uses trait A, B, and C)
class D 
{
    use A, B, C;
}
// class D end

// object of class D
$obj = new D;

// call method color1(), color2() and color3() using object of class D
$obj -> color1();
$obj -> color2();
$obj -> color3();

?>