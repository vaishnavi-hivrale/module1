<?php
// This program shows the that how to count values in array using array_count_values() function

    // define array
    $city=array("Rajkot", "Ahemdabad", "Surat", "Vadodra", "Mumbai", "Pune", "Banglore", "Delhi");

    // print array
?>
    
    <table class="table table-responsive table-light table-striped w-50" border="1" align="center" cellpadding="5">
        <tr>
            <th> Cities </th>
        </tr>

        <tr>
            <td>
<?php
            foreach($city as $values)
            {    
                echo "$values <br>";
            }
            $n=array_count_values($city);
?>
            </td>
        </tr>

        <tr>
            <td> <?php echo "Total no. of cities:". $n; ?> </td>
        </tr>
        </table>