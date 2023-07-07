<?php
// This program shows that how to create multidimensional array in php

    // one or more than one array is stored within another array is known as multidimensional array
    
    // define array
    $arr=array("state" => array("Gujarat", "Maharshtra", "Rajasthan", "UP"),
               "city" => array("Rajkot", "Ahemdabad", "Mumbai", "Pune", "Jaipur", "Jaisalmer", "Mathura", "Banaras"));

    // print array
    ?>

    <div height="auto" width="70%" style="margin:2%; padding:2%">
        <center>
            <table border="1" height="auto", width="25%", cellpadding="5" class="table table-responsive" style="margin-top:5%; background-color: royalblue; color: white; border-color: white;">
                <tr>
                    <th> State </th>
                    <th> City </th>
                </tr>

                <tr>
                    <td rowspan="2" align="center"> <?php print_r($arr["state"][0]); ?> </td>
                    <td> <?php print_r($arr["city"][0]); ?> </td>
                </tr>

                <tr>
                    <td> <?php print_r($arr["city"][1]); ?> </td>
                </tr>

                <tr>
                    <td rowspan="2" align="center"> <?php print_r($arr["state"][1]); ?> </td>
                    <td> <?php print_r($arr["city"][2]); ?> </td>
                </tr>

                <tr>
                    <td> <?php print_r($arr["city"][3]); ?> </td>
                </tr>

                <tr> 
                    <td rowspan="2" align="center"> <?php print_r($arr["state"][2]); ?> </td>
                    <td> <?php print_r($arr["city"][4]); ?></td>
                </tr>

                <tr>
                    <td> <?php print_r($arr["city"][5]); ?> </td>
                </tr>

                <tr> 
                    <td rowspan="2" align="center"> <?php print_r($arr["state"][3]); ?> </td>
                    <td> <?php print_r($arr["city"][6]); ?> </td>
                </tr>

                <tr>
                    <td> <?php print_r($arr["city"][7]); ?> </td>
                </tr>
            </table>
        </center>
    </div>

<?php

?>