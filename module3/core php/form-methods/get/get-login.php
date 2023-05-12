<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Get Method </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- user credentials: username=getuser password=getpsw123 -->

    <div style="height:auto; width:70%; background-color: aqua; padding:5%; margin-top:10%; margin-left:10%; ">

        <form name="getloginform" method="get" action="get-welcome.php">
        
            <center>
                <h1> <u> LOGIN FORM  </u> </h1>
                
                <label> Enter Username </label> &nbsp;
                <input type="text" name="gettxt1" placeholder="Enter Username" required> <br> <br>

                <label> Enter Password </label> &nbsp;
                <input type="text" name="gettxt2" placeholder="Enter Password" required> <br> <br>

                <input type="submit" name="getbtn" value="Login">
            </center>

        </form>

    </div>
</body>
</html>

<?php
    if(isset($_GET["getbtn"]))
    {
        $uname=$_GET["gettxt1"];
        $psw=$_GET["gettxt2"];

        if($uname=="getuser" && $psw=="psw123")
        {
            echo "<h1 align=center style=color:green> Login Successful </h1>";
            header("refresh:3, welcome.php");
    
        }
        else
        {
            echo "<h1 align=center style=color:green> Incorrect username or password </h1>";
            header("refresh:6, get-login.php");
        }
    }
?>