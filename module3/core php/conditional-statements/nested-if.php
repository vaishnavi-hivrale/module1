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
    <form method="post" action="#" align="center"> 
        <label> Enter any number </label> 
        <input type="text" name="txt1" placeholder="Enter number" required> <br><br>
        <input type="submit" value="Check if the number is even and devided by 7 or not"
         name="sub"> <br>
    </form>
</body>
</html>

<?php
// This program shows the use of nested if statement in php

    if(isset($_POST["sub"]))
    {
        // get value of n 
        $n= $_POST["txt1"];

        if($n%2==0)
        {
            if($n%7==0)
            {
                echo "<h4 align=center> $n is even and devided by 7 </h4>";
            }
            else
            {
                echo "<h4 align=center> $n is even but not devided by 7 </h4>";
            }
        }
        else
        {
            echo "<h4 align=center> $n is odd </h4>";
        }
    }
?>