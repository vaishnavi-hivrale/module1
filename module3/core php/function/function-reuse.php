<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Function Reuse </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
 
    <?php
    //This program shows how to reuse the function php code

        //define function
        function address()
        {
            echo "<h2> Company Name: Tops Technology Pvt. Ltd. </h1> <h3> Company Address: 150 feet ring road, <br> aditya complex 1st floor  near indiara circle <br> above sbi bank rajkot-36005";
        }
    ?>
    
    <h1> Our office address <h1>
    
    <?php 
        //call function
        address(); 
    ?>

    <br><br>
    <a href="www.tops-int.com"> Visit us </a>

    <h1> 
        Reach us: 
        <?php 
            //function reuse
            address(); 
        ?> 
    </h1>
    
</body>
</html>


