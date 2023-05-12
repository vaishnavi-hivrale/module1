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
    <form method="post" action="" align="center">
        <label> Enter marks </label>
        <input type="text" name="mk" placeholder="Enter your marks"> <br><br>
        <input type="submit" name="sbmt" value="Check grade"> <br>
    </form>
</body>
</html>

<?php
// This program shows the use of switch statement in php

    if(isset($_POST["sbmt"]))
    {
        //get the marks 
        $m=$_POST["mk"];

        // Check the grade
        switch($m)
        {
            case ($m>80 && $m<=100):
                echo "<h4 align=center> Your grade is: A+ </h4>";
                break;

            case ($m>70 && $m<=80):
                echo "<h4 align=center> Your grade is: A </h4>";
                break;

            case ($m>60 && $m<=70):
                echo "<h4 align=center> Your grade is:B  </h4>";
                break;

            case ($m>50 && $m<=60):
                echo "<h4 align=center> Your grade is: c </h4>";
                break;

            case ($m>=30 && $m<=50):
                echo "<h4 align=center> You grade is: D </h4>";
                break;

            case ($m<30):
                echo "<h4 align=center> You are fail </h4>";
                break;
    
            default:
                echo "<h4 align=center> Data not found </h4>";
                break;
        }
    }
?>