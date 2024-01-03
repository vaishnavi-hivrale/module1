<?php
// Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total.


// initialize array
$numbers = array(10, 20, 30, 40, 50);

// initialize $sum
$total = 0;

// print the array
echo "<b> numbers[] </b> <br>";
foreach($numbers as $num)
{
    echo "$num <br>";
}

// calculate sum of numbers using for loop
for($i=0; $i<=4; $i++)
{
    $total = $total + $numbers[$i];
}

// print the total
echo "Sum of numbers in array is : $total";

?>