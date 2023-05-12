<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Post Method </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- user credentials: username=postuser password=postpsw456 -->

    <div style="height:auto; width:70%; background-color:aquamarine; padding:5%; margin-top:10%; margin-left:10%; ">

        <form name="postloginform" method="post" action="post-welcome.php">
        
            <center>
                <h1> <u> LOGIN FORM  </u> </h1>
                
                <label> Enter Username </label> &nbsp;
                <input type="text" name="posttxt1" placeholder="Enter Username" required> <br> <br>

                <label> Enter Password </label> &nbsp;
                <input type="text" name="posttxt2" placeholder="Enter Password" required> <br> <br>

                <input type="submit" name="postbtn" value="Login">
            </center>

        </form>

    </div>
</body>
</html>

<?php

    if(isset($_POST["postbtn"]))
    {
        $uname=$_POST["posttxt1"];
        $psw=$_POST["posttxt2"];

        if($uname=="postuser" && $psw=="psw456")
        {
            echo "<h1 align=center style=color:green> Login Successful </h1>";
            header("refresh:3, post-welcome.php");
        }
        else
        {
            echo "<h1 align=center style=color:green> Incorrect username or password </h1>";
            header("refresh:6, post-login.php");
        }
    }

?>