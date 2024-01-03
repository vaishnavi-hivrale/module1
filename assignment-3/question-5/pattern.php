<?php

    // define variable
    $a=5;
    $b=9;

    for($i=0; $i<=3; $i++)
    {
        print("$a $b <br>");

        if($a==5 && $b==9)
        {
            $a=$a*$a+1;
            $b=$b+1;
        }
        else
        {
            $a=$a+11;
            $b=$b+1;
        }
    }
?>