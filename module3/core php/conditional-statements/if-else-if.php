<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method="post" action="#">
        <label> Enter Value of a: </label>
        <input type="text" name="txt1" placeholder="Enter any number" required> <br><br>

        <label> Enter Value of b: </label>
        <input type="text" name="txt2" placeholder="Enter any number" required> <br><br>

        <input type="submit" name="compare" value="Compare"> <br>
    </form>
</body>
</html>

<?php
// This program shows the use of if-else-if statement in php

    // print the variables
    if(isset($_POST["compare"]))
    {
        $a=$_POST["txt1"];
        $b=$_POST["txt2"];

        if($a > $b)
        {
            echo "$a is greater than $b";
        }
        else if($a < $b)
        {
            echo "$a is less than $b";
        }
        else
        {
            echo "$a and $b both are same";
        }
    }
?>