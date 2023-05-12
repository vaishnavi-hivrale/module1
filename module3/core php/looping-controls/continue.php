<?php
// Thia program shows the use of continue to control loop

    for($i=1; $i<=20; $i++)
    {
        if($i=5 || $i=10)
        {
            continue;
        }
        echo $i."<br>";
    }
?>