<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> | Compound Interest </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <script>
        // This program calculates the compound interest

        // initialize the variables
        var ci;
        var p = 50000;
        var r = 2;
        var n = 2;
        var t = 5;



        // print the value of variables
        document.write("Principal Amount : " + p + "<br>");
        document.write("Rate of Interest : " + r + "<br>");
        document.write("Number of times interest is compounded per year : " + n + "<br>");
        document.write("Time (in years) : " + t + "<br>");


        // calculate the compound interest
        ci = p * Math.pow( ( 1 + ( r / 100 * n ) ), ( n * t ) ) - p;

        document.write("Compound Interest : " + ci);
    </script>
</body>
</html>