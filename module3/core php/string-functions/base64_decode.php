<?php
// This function shows the use of base64_decode()

    // define the string 
    $str="cGFzc3dvcmRAMTIzNDU2";

    // decoding the string using base64_decode() function
    echo "Decoding the string <b> $str </b> using base64_decode() function:<br>";
    echo base64_decode($str);
?>