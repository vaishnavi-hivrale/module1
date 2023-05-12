 <?php
//this program finds the simple interest
    
//user defined function simple_interest()
    function simple_interest()
    {
        //variable initialization
        $p=50000;
        $n=5;
        $r=2;

        //print 
        echo "<h3 align=center> Principle Amount p: $p </h3>";
        echo "<h3 align=center> Number of years  n: $n <h3>";
        echo "<h3 align=center> Rate of interesr r: $r </h3>";

        //formula to find siple interest
        $si=($p*$n*$r)/100;

        echo "<h2 align=center> Simple interest si: $si </h2>";
    }

    //function call
    simple_interest();
?>