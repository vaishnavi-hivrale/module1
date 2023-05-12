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
    <form method="post" action="#" align=center> 
        <label> Enter Number </label> 
        <input type="text" name="no" required> <br><br>
        <input type="Submit" value="Submit" name="sbmt"> <br>
    </form>    
</body>
</html>

<?php
// This program shows the use of if-else in php
    if(isset($_POST["sbmt"]))
    {
        $n=$_POST["no"];
        if($n%2==0)
        {
            echo "<h4 align=center> $n is even </h4>";
        }
        else
        {
            echo "<h4 align=center> $n is odd </h4>";
        }
    }
?>