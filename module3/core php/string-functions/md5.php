<?php
// This program shows the use of md5() function

    // define string
    $str="password_123";

    // md5() funcion only encodes the string once the string is encoded it won't be decoded anymore
    echo "encoding the string <b> $str </b> using md5() function: <br>";
    echo md5($str);
?>