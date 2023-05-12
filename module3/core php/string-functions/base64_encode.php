<?php
// This function is used to encode any string to non readable format
     
    // define variable (string or password)
    $str="password@123456";
    
    // encode string
    echo "encoding the string <b> $str </b> using using base64_encode() function <br>";
    echo base64_encode($str);
?>