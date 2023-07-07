<?php

if(isset($_POST["sbmt"]))
{
    header('refersh:3, login.php');
}
else
{
    header('refresh:3, register.php');
}


?>