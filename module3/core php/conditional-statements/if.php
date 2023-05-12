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
        <label> Enter your name: </label> 
        <input type="text" name="nm" placeholder="Enter Name" required> <br><br>

        <input type="submit" name="sbmt" value="Submit"> <br>
    </form>   
</body>
</html>
<?php
// This program shows the use of if statement

// we will get the name using form from user and print the name
// but we check the condition firdt that the button is set to the value or not using if

    if(isset($_POST["sbmt"]))
    {
        $name=$_POST["nm"];
        echo "<h4 align=center> Name=$name </h4>"; 
    }
?>