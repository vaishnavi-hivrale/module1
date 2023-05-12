<?php
/*This program calculates the average of subject marks 
math=85, chemistry=97 , computer=99, physics=65, hindi=78 */

    //user defined function to calculate average of subjects mark
    function average()
    {
        //variable initialization
        $m=85;
        $cm=97;
        $cmp=99;
        $phy=65;
        $h=78;

        //print subject marks
        echo "<h4> Marks of subject Maths: $m </h4>";
        echo "<h4> Marks of subject Chemistry: $cm </h4>";
        echo "<h4> Marks of subject Computer: $cmp </h4>";
        echo "<h4> Marks of subject Physics: $phy </h4>";
        echo "<h4> Marks of subject Hindi: $h </h4>";

        //formula to calculate average of subjects mark
        $avg=($m+ $cm+ $cmp+ $phy+ $h)/5;

        //print the average marks
        echo "<h3> Average Marks: $avg </h3>";
    }

    //function call
    average();
?>